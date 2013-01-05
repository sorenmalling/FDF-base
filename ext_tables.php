<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

	# Add typoscript templates
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Base/', 'FDF: Default site');

	# Modify sys_template settings
TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_template');
$GLOBALS['TCA']['sys_template']['columns']['sitetitle']['config']['eval'] = 'required';


?>
