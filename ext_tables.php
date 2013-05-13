<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

	# Add typoscript templates
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Base/', 'FDF: Default site');

	# Modify sys_template settings
#TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('sys_template');
$GLOBALS['TCA']['sys_template']['columns']['sitetitle']['config']['eval'] = 'required';
$GLOBALS['TCA']['sys_template']['columns']['config']['config']['readOnly'] = TRUE;
$GLOBALS['TCA']['sys_template']['columns']['config']['config']['type'] = 'passthrough';
$GLOBALS['TCA']['sys_template']['columns']['constants']['config']['readOnly'] = TRUE;
$GLOBALS['TCA']['sys_template']['columns']['constants']['config']['type'] = 'passthrough';

$GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['items'] = array (
	array (
		'Leder.FDF.dk', 'EXT:fdf_leder/Configuration/TypoScript/Page/'
	),
	array (
		'www.FDF.dk', 'EXT:fdf_fdfdk/Configuration/TypoScript/Page/'
	)
);
$GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['maxitems'] = 1;
$GLOBALS['TCA']['sys_template']['columns']['include_static_file']['label'] = 'Page configuration';
unset($GLOBALS['TCA']['sys_template']['columns']['include_static_file']['config']['size']);

#TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('pages');
$GLOBALS['TCA']['pages']['columns']['backend_layout']['config']['foreign_table_where'] = 'AND backend_layout.pid = ###SITEROOT###';


?>
