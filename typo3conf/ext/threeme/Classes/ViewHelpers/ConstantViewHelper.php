<?php
namespace THREEME\Threeme\ViewHelpers;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Original from EXT:themes - Thomas Deuling <typo3@coding.ms>
 * Adapted for EXT:threeme by André Steiling <andre@threeme.de>
 * https://github.com/typo3-themes/themes
 */

/**
 * Access constants
 *
 * @author Thomas Deuling <typo3@coding.ms>
 * @package themes
 */
class ConstantViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Gets a constant
     *
     * @param string $constant The name of the constant
     * @return string Constant-Value
     *
     * = Examples =
     *
     * <code title="Example">
     * <threeme:constant constant="threeme.frontend.pidHome" />
     * </code>
     * <output>
     * 50
     * (depending on your constant)
     * </output>
     */
    public function render($constant = '')
    {

        $pageWithTheme   = \THREEME\Threeme\Utilities\FindParentPageWithThemeUtility::find($this->getFrontendController()->id);
        $pageLanguage    = (int)GeneralUtility::_GP('L');

        // instantiate the cache
        /** @var \TYPO3\CMS\Core\Cache\Frontend\FrontendInterface $cache */
        $cache           = GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Cache\\CacheManager')->getCache('threeme_cache');
        $cacheLifeTime = 60 * 60 * 24 * 7 * 365 * 20;
        $cacheIdentifierString = 'threeme-of-page-' . $pageWithTheme . '-of-language-' . $pageLanguage;
        $cacheIdentifier = sha1($cacheIdentifierString);

        // If flatSetup is available, cache it
        $flatSetup = $this->getFrontendController()->tmpl->flatSetup;
        if ((isset($flatSetup) && (is_array($flatSetup)) && (count($flatSetup) > 0)))
        {
            $cache->set(
                $cacheIdentifier,
                $flatSetup,
                array(
                        'page-' . $this->getFrontendController()->id
                ),
                $cacheLifeTime
            );
        } else {
            $flatSetup = $cache->get($cacheIdentifier);
        }

        // If flatSetup not available and not cached, generate it!
        if (!isset($flatSetup) || !is_array($flatSetup))
        {
            $this->getFrontendController()->tmpl->generateConfig();
            $flatSetup = $this->getFrontendController()->tmpl->flatSetup;
            $cache->set(
                $cacheIdentifier,
                $flatSetup,
                array(
                    'page-' . $this->getFrontendController()->id
                ),
                $cacheLifeTime
            );
        }

        // check if there is a value and return it
        if ((is_array($flatSetup)) && (array_key_exists($constant, $flatSetup)))
        {
            return $this->getFrontendController()->tmpl->substituteConstants($flatSetup[$constant]);
        }
        return NULL;
    }

    /**
     * @return \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController
     */
    public function getFrontendController()
    {
        return $GLOBALS['TSFE'];
    }
}
