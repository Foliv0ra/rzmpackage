<?php
defined('TYPO3_MODE') || die();

/**
 * Extension key
 */
$extensionKey = 'rzmpackage';

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['rzm'] = 'EXT:' . $extensionKey . '/Configuration/RTE/Default-RTE-package.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $extensionKey . '/Configuration/TSConfig/PageTSConfig/">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $extensionKey . '/Configuration/TSConfig/PageTSConfig/BackendLayouts/">');