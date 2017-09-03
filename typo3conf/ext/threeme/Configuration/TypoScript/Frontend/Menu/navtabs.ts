menu.navtabs = HMENU
menu.navtabs {
    entryLevel = {$threeme.menu.navtabs.entry}
    excludeUidList = {$threeme.menu.navtabs.excludeUidList}

    1 = TMENU
    1 {
        expAll = 1
        noBlur = 1
        stdWrap.dataWrap = <ul class="nav nav-tabs colum-{register:count_menuItems}">|</ul>

        NO {
            htmlSpecialChars = 1
            wrapItemAndSub = <li id="tabs{field:uid}" class="first">|</li> |*| <li id="tabs{field:uid}">|</li> |*| <li id="tabs{field:uid}" class="last">|</li>
            wrapItemAndSub.insertData = 1
            ATagTitle.field = description // subtitle
        }

        ACT = 1
        ACT {
            htmlSpecialChars = 1
            wrapItemAndSub = <li id="tabs{field:uid}" class="active first">|</li> |*| <li id="tabs{field:uid}" class="active">|</li> |*| <li id="tabs{field:uid}" class="active last">|</li>
            wrapItemAndSub.insertData = 1
            ATagTitle.field = description // subtitle
        }
    }
}