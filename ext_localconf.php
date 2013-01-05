<?php
	if (!defined ('TYPO3_MODE'))    die ('Access denied.');

		// unserializing the configuration so we can use it here:
	$_EXTCONF = unserialize($_EXTCONF);

	t3lib_extMgm::addPageTSConfig('
		<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fdf_base/Resources/Private/TSConfig/Setup.ts">
		mod.web_txtemplavoilaM1.enableDeleteIconForLocalElements = 1
		templavoila.wizards.newContentElement.wizardItems.common.show := removeFromList(bullets,table)
	');

	t3lib_extMgm::addUserTSConfig('
		mod.web_txtemplavoilaM1.sideBarEnable = 0
	');
?>
