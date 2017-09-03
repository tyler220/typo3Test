menu.navbar = HMENU
menu.navbar {
    entryLevel = {$threeme.menu.navbar.entry}
    excludeUidList = {$threeme.menu.navbar.excludeUidList}

    1 = TMENU
    1 {
        expAll = 0
        noBlur = 1
        stdWrap.dataWrap = <ul class="nav navbar-nav navbar-right colum-{register:count_menuItems}">|</ul>

        NO {
            htmlSpecialChars = 1
            wrapItemAndSub = <li id="navbar{field:uid}" class="first" >|</li> |*| <li id="navbar{field:uid}">|</li> |*| <li id="navbar{field:uid}" class="last">|</li>
            wrapItemAndSub.insertData = 1
            ATagTitle.field = description // subtitle
        }

        ACT = 1
        ACT {
            htmlSpecialChars = 1
            wrapItemAndSub = <li id="navbar{field:uid}" class="first active">|</li> |*| <li id="navbar{field:uid}" class="active">|</li> |*| <li id="navbar{field:uid}" class="last active">|</li>
            wrapItemAndSub.insertData = 1
            ATagTitle.field = description // subtitle
        }
    }
}