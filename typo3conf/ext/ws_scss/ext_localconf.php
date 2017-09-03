
<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess']['wsscss'] = 'EXT:ws_scss/Classes/Hooks/RenderPreProcessorHook.php:&WapplerSystems\WsScss\Hooks\RenderPreProcessorHook->renderPreProcessorProc';

// Caching the pages - default expire 3600 seconds
if (!is_array($TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['ws_scss'])) {
	$TYPO3_CONF_VARS['SYS']['caching']['cacheConfigurations']['ws_scss'] = array(
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
		'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\FileBackend',
		'options' => array(
				'defaultLifetime' => 3600*24*7,
			),
	);
}

?> 