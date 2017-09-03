<?php
defined('TYPO3_MODE') || die();

// Add uniqueInPid to eval to avoid duplicate page title on same treelevel
$GLOBALS['TCA']['pages']['columns']['title']['config']['eval'] = 'trim,required,uniqueInPid';

// Add "Important note on page" icon
$GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-threeme'] = 'threeme-pagetree-sys-note';
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
    0 => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:threeme-pagetree-sys-note',
    1 => 'threeme',
    2 => 'threeme-pagetree-sys-note'
];
