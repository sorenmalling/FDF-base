page = PAGE
page {
	typeNum = 0
	10 = FLUIDTEMPLATE
	10 {
		file = EXT:fdf_leder/Resources/Private/Layouts/Default.html
		variables {
			contentLeft < styles.content.getLeft
			contentNormal < styles.content.get
			contentRight < styles.content.getRight
		}
	}
		# Viser Meta tags som er sat specifikt på siden
		# Hvis der ikke er sat nogen, så vises dem fra den overstående side
	meta {
		description.data = levelfield:-1,description,slide
		keywords.data = levelfield:-1,keywords,slide
	}
}