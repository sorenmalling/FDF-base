<?php
	if (!defined ('TYPO3_MODE'))    die ('Access denied.');

		// unserializing the configuration so we can use it here:
	$_EXTCONF = unserialize($_EXTCONF);
/*
	t3lib_extMgm::addPageTSConfig('
		mod.web_txtemplavoilaM1.enableDeleteIconForLocalElements = 1
		TCEFORM.pages {
			layout.disabled = 1
			newUntil.disabled = 1
			content_from_pid.disabled = 1
			storage_pid.disabled = 1
			TSconfig.disabled = 1
			author.disabled = 1
			author_email.disabled = 1
			lastUpdated.disabled = 1
			media.disabled = 1
			url_scheme.disabled = 1
			target.disabled = 1
			alias.disabled = 1
			subtitle.disabled = 1
			fe_login_mode.disabled = 1
			tx_realurl_pathoverride.disabled = 1
			tx_realurl_exclude.disabled = 1
			cache_timeout.disabled = 1
			cache_tags.disabled = 1
			l18n_cfg.disabled = 1
			php_tree_stop.disabled = 1
		}
		TCEFORM.tt_content {
			colPos.disabled = 1
			sys_language_uid.disabled = 1
			header_position.disabled = 1
			header_layout.disabled = 1
			date.disabled = 1
			rte_enabled.disabled = 1
			image_zoom.disabled = 1
			spaceBefore.disabled = 1
			spaceAfter.disabled = 1
			imageborder.disabled = 1
			image_compression.disabled = 1
			image_effects.disabled = 1
			imagecaption_position.disabled = 1
			image_noRows.disabled = 1
			sectionIndex.disabled = 1
			linkToTop.disabled = 1
			layout.disabled = 1
			section_frame.disabled = 1

			imageorient {
				removeItems = 17,18
			}
			CType {
				removeItems = header,table,bullets,div,menu,uploads,search,multimedia
			}
		}
		mod {
			web_list {
				hideTables = static_territories,static_countries,static_country_zones,static_languages,static_currencies,sys_action,tt_content,pages
			}
		}
		templavoila.wizards.newContentElement.wizardItems.common.show := removeFromList(bullets,table)
	');
*/
	t3lib_extMgm::addUserTSConfig('
		mod.web_txtemplavoilaM1.sideBarEnable = 0
	');
?>
