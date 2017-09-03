menu.footer = HMENU
menu.footer {
    special = list
    special.value = {$threeme.frontend.pidImprint} , {$threeme.frontend.pidPrivacy} , {$threeme.frontend.pidSitemap}
    includeNotInMenu = 1

    1 = TMENU
    1 {
        expAll = 0
        wrap = <ul class="navfooter">|</ul>

        NO {
            htmlSpecialChars = 1
            wrapItemAndSub = <li>|</li>
            ATagTitle.field = description // subtitle
        }

        ACT = 1
        ACT {
            htmlSpecialChars = 1
            wrapItemAndSub = <li class="active">|</li>
            ATagTitle.field = description // subtitle
        }
    }
}
