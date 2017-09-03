menu.navlist = HMENU
menu.navlist {
    entryLevel = {$threeme.menu.navlist.entry}
    excludeUidList = {$threeme.menu.navlist.excludeUidList}

    1 = TMENU
    1 {
        expAll = 1
        noBlur = 1
        wrap = <ul class="nav nav-justified nav-list">|</ul>

        NO {
            htmlSpecialChars = 1
            wrapItemAndSub = <li class="level-1 first">|</li> |*| <li class="level-1">|</li> |*| <li class="level-1 last">|</li>
            ATagTitle.field = description // subtitle
            ATagBeforeWrap = 1
            linkWrap = <i class="fa fa-angle-right" aria-hidden="true"></i> |
        }

        ACT = 1
        ACT {
            htmlSpecialChars = 1
            wrapItemAndSub = <li class="level-1 active">|</li>
            ATagTitle.field = description // subtitle
            ATagBeforeWrap = 1
            linkWrap = <i class="fa fa-angle-right" aria-hidden="true"></i> |
        }
    }

    2 < .1
    2 {
        wrap = <ul class="nav">|</ul>
        NO.wrapItemAndSub = <li class="level-2 first">|</li> |*| <li class="level-2">|</li> |*| <li class="level-2 last">|</li>
        NO.linkWrap >
        ACT.wrapItemAndSub = <li class="level-2 first active">|</li> |*| <li class="level-2 active">|</li> |*| <li class="level-2 active last">|</li>
        ACT.linkWrap >
    }

    3 < .2
    3 {
        wrap = <ul class="nav">|</ul>
        NO.wrapItemAndSub = <li class="level-3 first">|</li> |*| <li class="level-3">|</li> |*| <li class="level-3 last">|</li>
        ACT.wrapItemAndSub = <li class="level-3 first active">|</li> |*| <li class="level-3 active">|</li> |*| <li class="level-3 active last">|</li>
    }
}