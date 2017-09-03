<?php
defined('TYPO3_MODE') || die();

$fields = array (
    'tx_threeme_header_css' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:tt_content.threeme_header_css',
        'config' => array(
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => array(
                array('LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:tt_content.threeme_header_css.0', 0),
            ),
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $fields,
    true
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'header',
    'tx_threeme_header_css',
    'after:header_layout'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'tx_threeme_header_css',
    'after:header_layout'
);
