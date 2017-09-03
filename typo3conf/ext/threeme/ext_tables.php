<?php
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

if (TYPO3_MODE == 'BE') {
    // Add Threeme Logo and Background
    $extConfBackend = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']);

    if (empty(trim($extConfBackend['loginLogo']))) {
        $extConfBackend['loginLogo'] = 'EXT:threeme/Resources/Public/Images/Backend/LoginLogo.png';
    }
    if (empty(trim($extConfBackend['loginHighlightColor']))) {
        $extConfBackend['loginHighlightColor'] = '#166299';
    }
    if (empty(trim($extConfBackend['loginBackgroundImage']))) {
        $extConfBackend['loginBackgroundImage'] = 'EXT:threeme/Resources/Public/Images/Backend/LoginBackgroundImage.jpg';
    }

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'] = serialize($extConfBackend);
}
