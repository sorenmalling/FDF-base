lib.navigation.main = HMENU
lib.navigation.main {
	stdWrap {
		cache {
			key = fdf_base_navigation_main
			lifetime = 0
			tags = navigation
		}
	}
	1 = TMENU
	1 {
		wrap = <ol>|</ol>
		expAll = 1
		NO{
			wrapItemAndSub = <li>|</li>
			ATagTitle.field = description // subtitle // title
		}
	}
	1.ACT = 1
	1.ACT < .1.NO

	2 < .1
	2.NO.doNotLinkIt = 1
	3 < .1
}
