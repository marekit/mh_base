<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY, 'Configuration/TypoScript', 'Project: mh_base'
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:mh_base/Resources/Private/TypoScript/PageTsConfig/Master.ts">
');