<?php
defined('TYPO3') || die();

/**
 * Add TypoScript Static Template
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'powermail_cond',
    'Configuration/TypoScript/',
    'Main TypoScript'
);
