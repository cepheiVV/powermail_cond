<?php
if (!defined('TYPO3')) {
    die('Access denied.');
}

call_user_func(function () {

    /**
     * ContentElementWizard for Pi1
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT:source="FILE:EXT:powermail_cond/Configuration/TSConfig/WebList.typoscript">'
    );

    /**
     * Include Plugins
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Powermairectorprefix20220126lCond',
        'Pi1',
        [
            \In2code\Powermairectorprefix20220126lCond\Controller\ConditionController::class => 'buildCondition'
        ],
        [
            \In2code\Powermairectorprefix20220126lCond\Controller\ConditionController::class => 'buildCondition'
        ]
    );

    /**
     * User field registrations in TCA/FlexForm
     */
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1588153418] = [
        'nodeName' => 'powermailCondShowNote',
        'priority' => 50,
        'class' => \In2code\PowermailCond\Tca\Note::class,
    ];

    /**
     * Xclassing
     */
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Validator\InputValidator::class] = [
        'className' => \In2code\PowermailCond\Domain\Validator\ConditionAwareValidator::class
    ];
});
