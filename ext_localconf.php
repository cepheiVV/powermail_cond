<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Show Tables in Page View
$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_powermailcond_conditions'][0] = array(
	'fList' => 'title',
	'icon' => TRUE,
);


##### EID Services #####

// EID for storing values in the session (via AJAX)
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['powermailcond_saveToSession'] = 'EXT:powermail_cond/Classes/Utility/EidSaveInSession.php';

// EID for telling jQuery which values are allowed and which not (via AJAX)
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['powermailcond_getFieldStatus'] = 'EXT:powermail_cond/Classes/Utility/EidGetFieldlist.php';

?>