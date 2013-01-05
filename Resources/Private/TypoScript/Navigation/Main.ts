lib.navigation.main = HMENU
lib.navigation.main {
	1 = TMENU
	1 {
		wrap = <ol>|</ol>
		expAll = 0
		NO{
			wrapItemAndSub = <li>|</li>
			ATagTitle.field = subtitle // title
		}
	}
	1.ACT = 1
	1.ACT < .1.NO
}