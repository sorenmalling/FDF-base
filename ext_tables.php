<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

	# Add typoscript templates
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Base/', 'FDF: Default site');


?>
