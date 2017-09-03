menu.breadcrumb = COA
menu.breadcrumb {
    wrap = <ol class="breadcrumb hidden-print">|</ol>

    # Home
    10 = TEXT
    10 {
        wrap = <li class="first">|</li>
        typolink {
            parameter = {$threeme.frontend.pidHome}
            title.data = LLL:EXT:threeme/Resources/Private/Language/locallang.xml:menu.breadcrumb.title
            ATagBeforeWrap = 1
        }
    }

    # Rootline
    20 = HMENU
    20 {
        special = rootline
        special.range = {$threeme.menu.breadcrumb.entry}
        noBlur = 1
        1 = TMENU
        1 {
            NO {
                htmlSpecialChars = 1
                allWrap = <li>|</li>
                ATagTitle.field = subtitle // title
                ATagTitle.noTrimWrap = |{LLL:EXT:threeme/Resources/Private/Language/locallang.xml:menu.breadcrumb.title} |
                ATagTitle.insertData = 1
                ATagBeforeWrap = 1
                linkWrap = <i class="fa fa-angle-right" aria-hidden="true"></i> |
            }
            CUR = 1
            CUR {
                htmlSpecialChars = 1
                allWrap = <li>|</li>
                ATagTitle.field = subtitle // title
                ATagParams = class="active"
                ATagTitle.noTrimWrap = |{LLL:EXT:threeme/Resources/Private/Language/locallang.xml:menu.breadcrumb.current.title} |
                ATagTitle.insertData = 1
                ATagBeforeWrap = 1
                linkWrap = <i class="fa fa-angle-right" aria-hidden="true"></i> |
            }
        }
    }
}