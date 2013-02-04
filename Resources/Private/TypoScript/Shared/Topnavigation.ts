temp.item = TEXT
temp.item.wrap = <li>|</li>

lib.shared.topnavigation = COA
lib.shared.topnavigation {
		# FDF Logo
	10 = IMAGE
	10 {
		file = EXT:fdf_base/Resources/Public/Images/Logo.png
		altText = Frivilligt Drenge- og Pige-Forbund, FDF
		stdWrap {
			typolink {
				ATagParams = class="logo"
				parameter = http://www.fdf.dk
			}
		}
	}
		# Målgruppe sider
	20 = COA
	20 {
		wrap = <nav><ol>|</ol></nav>
			# Sille og Sigurd
		10 < temp.item
		10 {
			value = Sille og Sigurd
			typolink {
				parameter = http://sillesigurd.fdf.dk
			}
		}
			# FLUX
		20 < temp.item
		20 {
			value = FLUX
			typolink {
				parameter = http://flux.fdf.dk
			}
		}
			# BLUZ
		30 < temp.item
		30 {
			value = BLUZ
			typolink {
				parameter = http://bluz.fdf.dk
			}
		}
			# Leder.FDF.dk
		40 < temp.item
		40 {
			value = Leder
			typolink {
				parameter = http://leder.fdf.dk
			}
		}
			# FDF.dk
		50 < temp.item
		50 {
			value = FDF.dk
			typolink {
				parameter = http://www.fdf.dk
			}
		}
			# Søgefelt
		60 = TEXT
		60 {
			wrap = <li class="search">|</li>
			value = <input type="search" placeholder="Søg">
		}
	}
		# Mit FDF.DK
	30 = COA
	30 {
		wrap = <ol class="user"><li>|</li></ol>
		10 = TEXT
		10 {
			value = Mit FDF.DK
			typolink {
				parameter = http://mit.FDF.dk/
			}
		}
		20 = COA
		20 {
			wrap = <ul class="user-menu"><li>|</li></ul>
			10 < plugin.tx_felogin_pi1
		}
		20 >
	}
}
