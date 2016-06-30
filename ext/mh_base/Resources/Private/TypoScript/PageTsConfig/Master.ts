# Configuration for backend modules
# @see: https://docs.typo3.org/typo3cms/TSconfigReference/PageTsconfig/Mod/Index.html
mod {
	# Redefine viewpage width with Bootstrap breakpoints
	web_view {
		previewFrameWidths >
		previewFrameWidths {
			320 {
				label = LLL:EXT:mh_base/Resources/Private/Language/locallang.xlf:backend.viewpage.xs
			}
			768 {
				label = LLL:EXT:mh_base/Resources/Private/Language/locallang.xlf:backend.viewpage.sm
			}
			992 {
				label = LLL:EXT:mh_base/Resources/Private/Language/locallang.xlf:backend.viewpage.md
			}
			1200 {
				label = LLL:EXT:mh_base/Resources/Private/Language/locallang.xlf:backend.viewpage.lg
			}
		}
	}
}