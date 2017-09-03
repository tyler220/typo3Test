lib.link-to-top = TEXT
lib.link-to-top {
    value = <a href="#threeme-top" class="threeme-ui-totop threeme-ui-scroll" title="{LLL:EXT:threeme/Resources/Private/Language/locallang.xml:totop.title}"><i class="icon fa" aria-hidden="true"></i></a>
    insertData = 1
}

lib.print = TEXT
lib.print {
    value = <a href="javascript:print()" class="threeme-ui-print" title="{LLL:EXT:threeme/Resources/Private/Language/locallang.xml:print.title}"><i class="icon fa" aria-hidden="true"></i></a>
    insertData = 1
}

lib.sitemap = TEXT
lib.sitemap {
    typolink {
        parameter = {$threeme.frontend.pidSitemap}
        wrap = <i class="icon fa" aria-hidden="true"></i><span class="sr-only">|</span>
        title.data = LLL:EXT:threeme/Resources/Private/Language/locallang.xml:sitemap.title
        ATagParams = class="threeme-ui-sitemap"
        ATagBeforeWrap = 1
    }
}


menu.site-services = COA
menu.site-services {
    wrap = <ul class="list-inline list-unstyled">|</ul>

    10 < lib.link-to-top
    10.wrap = <li>|</li>

    20 < lib.print
    20.wrap = <li>|</li>

    30 < lib.sitemap
    30.wrap = <li>|</li>
}
