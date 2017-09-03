config {
    doctype = html5
    metaCharset = UTF-8

    admPanel = {$threeme.enable.adminPanel}
    debug = {$threeme.enable.debug}

    absRefPrefix = {$threeme.enable.absRefPrefix}
    headerComment = {$threeme.enable.headerComment}

    additionalHeaders {
        10 {
            # X-Frame settings
            header = X-Frame-Options: SAMEORIGIN
        }
    }

    intTarget = _top
    extTarget = _blank
    fileTarget = _blank

    sendCacheHeaders = 1
    cache_clearAtMidnight = 1

    typolinkCheckRootline = 1
    typolinkEnableLinksAcrossDomains = 1
    content_from_pid_allowOutsideDomain = 1

    spamProtectEmailAddresses = {$threeme.enable.spamProtectEmailAddresses}
    spamProtectEmailAddresses_atSubst = {$threeme.enable.spamProtectEmailAddresses_atSubst}
    spamProtectEmailAddresses_lastDotSubst = {$threeme.enable.spamProtectEmailAddresses_lastDotSubst}

    # Disable Image Upscaling
    noScaleUp = 1

    # Concate and compress only in applicationContext "production"
    compressJs =0
    compressCss = 0
    concatenateJs = 0
    concatenateCss = 0
    minifyJs = 0
    minifyCSS = 0

    disablePrefixComment = 1
    inlineStyle2TempFile = 1
    removePageCss = {$threeme.enable.removePageCss}
    removeDefaultCss = {$threeme.enable.removeDefaultCss}
    removeDefaultJS = {$threeme.enable.removeDefaultJS}
    moveJsFromHeaderToFooter = {$threeme.enable.moveJsFromHeaderToFooter}
    prefixLocalAnchors = all

    # SEO minimal settings
    pageTitleFirst = 1
    pageTitleSeparator = -
    pageTitleSeparator.noTrimWrap = | | |
    meaningfulTempFilePrefix = 100

    # Disable global indexing, bind it to typeNum!
    index_enable = 0
    index_externals = 0
    index_metatags = 0

    # Enable RealURL
    tx_realurl_enable = {$threeme.enable.realurlEnable}

    # Language settings
    linkVars = L(1-99)
    uniqueLinkVars = 1
    sys_language_uid = 0
    language = {$threeme.language.isoCodeShort}
    locale_all = {$threeme.language.isoCode}.UTF-8
    sys_language_overlay = {$threeme.language.sys_language_overlay}
    sys_language_mode = {$threeme.language.sys_language_mode}

    htmlTag_langKey = {$threeme.language.isoCodeShort}
    htmlTag_dir = ltr
    htmlTag_stdWrap {
        setContentToCurrent = 1

        cObject = COA
        cObject {
            temp = TEXT
            temp.addParams.class = no-js
            temp.append = TEXT
            temp.append.char = 10
            temp.current = 1

            # IE8
/*
            30 < .temp
            30.addParams.class = no-js ie ie8
            30.wrap = <!--[if IE 8]>|<![endif]-->

            # IE9
            40 < .temp
            40.addParams.class = no-js ie ie9
            40.wrap = <!--[if IE 9]>|<![endif]-->

            # No IE or > IE9
            60 < .temp
            60.wrap = <!--[if (gt IE 9)|!(IE)]><!--> # <!--<![endif]-->
            60.wrap.splitChar = #
*/
        }
    }
}

/*
[globalVar = GP:L = 1]
    config {
        locale_all = en_EN
        sys_language_uid = 1
        sys_language_isocode = en
    }
[GLOBAL]
*/


[applicationContext = Production]
config {
    compressJs = 1
    compressCss = 1
    concatenateJs = 1
    concatenateCss = 1
    minifyJs = 1
    minifyCSS = 1
}
[GLOBAL]
