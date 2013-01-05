<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

	# Add typoscript templates
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Base/', 'FDF: Default site');

	# Modify sys_template settings
TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_template');
$GLOBALS['TCA']['sys_template']['columns']['sitetitle']['config']['eval'] = 'required';

TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('pages');
$GLOBALS['TCA']['pages']['columns']['backend_layout']['config']['foreign_table_where'] = 'AND backend_layout.pid = ###SITEROOT###';


?>
