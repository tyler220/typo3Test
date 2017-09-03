<?php
declare(strict_types=1);
namespace TYPO3\CMS\Form\Mvc\Configuration;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\ArrayUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManager as ExtbaseConfigurationManager;
use TYPO3\CMS\Form\Mvc\Configuration\Exception\ExtensionNameRequiredException;

/**
 * Extend the ExtbaseConfigurationManager to read YAML configurations.
 *
 * Scope: frontend / backend
 * @internal
 */
class ConfigurationManager extends ExtbaseConfigurationManager implements ConfigurationManagerInterface
{
    /**
     * @var \TYPO3\CMS\Form\Mvc\Configuration\YamlSource
     */
    protected $yamlSource;

    /**
     * 1st level configuration cache
     *
     * @var array
     */
    protected $configurationCache = [];

    /**
     * @param \TYPO3\CMS\Form\Mvc\Configuration\YamlSource $yamlSource
     * @internal
     */
    public function injectYamlSource(\TYPO3\CMS\Form\Mvc\Configuration\YamlSource $yamlSource)
    {
        $this->yamlSource = $yamlSource;
    }

    /**
     * @param string $configurationType The kind of configuration to fetch - must be one of the CONFIGURATION_TYPE_* constants
     * @param string $extensionName if specified, the configuration for the given extension will be returned.
     * @param string $pluginName if specified, the configuration for the given plugin will be returned.
     * @return array The configuration
     * @internal
     */
    public function getConfiguration($configurationType, $extensionName = null, $pluginName = null)
    {
        switch ($configurationType) {
            case self::CONFIGURATION_TYPE_YAML_SETTINGS:
                return $this->getConfigurationFromYamlFile($extensionName);
            default:
                return parent::getConfiguration($configurationType, $extensionName, $pluginName);
        }
    }

    /**
     * Load and parse yaml files which are configured within the TypoScript
     * path plugin.tx_extensionkey.settings.yamlConfigurations
     *
     * The following steps will be done:
     *
     * * Convert each singe yaml file into an array
     * * merge this arrays together
     * * resolve all declared inheritances
     * * remove all keys if their values are NULL
     * * return all configuration paths within TYPO3.CMS
     * * sort by array keys, if all keys within the current nesting level are numerical keys
     * * resolve possible TypoScript settings in FE mode
     *
     * @param string $extensionName
     * @return array
     * @throws ExtensionNameRequiredException
     */
    protected function getConfigurationFromYamlFile(string $extensionName): array
    {
        if (empty($extensionName)) {
            throw new ExtensionNameRequiredException(
                'Please specify an extension key to load a YAML configuration',
                1471473377
            );
        }
        $ucFirstExtensioName = ucfirst($extensionName);

        // 1st level cache
        $configurationCacheKey = strtolower(self::CONFIGURATION_TYPE_YAML_SETTINGS . '|' . $extensionName);
        if (isset($this->configurationCache[$configurationCacheKey])) {
            return $this->configurationCache[$configurationCacheKey];
        }

        $typoscriptSettings = parent::getConfiguration(
            ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS,
            $extensionName
        );
        $yamlSettingsFilePaths = isset($typoscriptSettings['yamlConfigurations'])
            ? ArrayUtility::sortArrayWithIntegerKeys($typoscriptSettings['yamlConfigurations'])
            : [];
        $yamlSettings = InheritancesResolverService::create($this->yamlSource->load($yamlSettingsFilePaths))
            ->getResolvedConfiguration();

        $yamlSettings = ArrayUtility::removeNullValuesRecursive($yamlSettings);
        $yamlSettings = is_array($yamlSettings['TYPO3']['CMS'][$ucFirstExtensioName])
            ? $yamlSettings['TYPO3']['CMS'][$ucFirstExtensioName]
            : [];
        $yamlSettings = ArrayUtility::sortArrayWithIntegerKeysRecursive($yamlSettings);
        $yamlSettings = $this->overrideConfigurationByTypoScript($yamlSettings, $extensionName);

        // 1st level cache
        $this->configurationCache[$configurationCacheKey] = $yamlSettings;
        return $yamlSettings;
    }

    /**
     * @param array $yamlSettings
     * @param string $extensionName
     * @return array
     */
    protected function overrideConfigurationByTypoScript(array $yamlSettings, string $extensionName): array
    {
        $typoScript = parent::getConfiguration(self::CONFIGURATION_TYPE_SETTINGS, $extensionName);
        if (is_array($typoScript['yamlSettingsOverrides']) && !empty($typoScript['yamlSettingsOverrides'])) {
            ArrayUtility::mergeRecursiveWithOverrule(
                $yamlSettings,
                $typoScript['yamlSettingsOverrides']
            );

            if ($this->environmentService->isEnvironmentInFrontendMode()) {
                $yamlSettings = $this->objectManager->get(TypoScriptService::class)
                    ->resolvePossibleTypoScriptConfiguration($yamlSettings);
            }
        }
        return $yamlSettings;
    }
}
