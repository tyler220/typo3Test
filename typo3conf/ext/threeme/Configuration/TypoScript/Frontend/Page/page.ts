page = PAGE
page {
    typeNum = 0
    shortcutIcon = {$threeme.frontend.shortcutIcon}

    # Disable global indexing, bind on typeNum!
    config.index_enable = {$threeme.enable.index_enable}
    config.index_externals = {$threeme.enable.index_externals}
    config.index_metatags = {$threeme.enable.index_metatags}

    # Compile CSS on your own using tools like "Compass". Take a look into Resources/Private/Sass/config.rb.
    # Alternative use third party extensions like "ws_scss" - see below ...
    includeCSS {
        website = {$threeme.enable.publicBasePath}/Css/styles-website.css
        website.forceOnTop = 1

        print = {$threeme.enable.publicBasePath}/Css/styles-print.css
        print.media = print
    }

    includeJSFooterlibs {
        jQuery = {$threeme.framework.jQuery.cdn}/{$threeme.framework.jQuery.version}/jquery.min.js
        jQuery.external = 1
        jQuery.forceOnTop = 1
        jQuery.disableCompression = 1
        jQuery.excludeFromConcatenation = 1
    }

    includeJSFooter {
        bootstrapAffix = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Bootstrap/affix.js
        bootstrapTransition = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Bootstrap/transition.js
        bootstrapCollapse = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Bootstrap/collapse.js
        bootstrapCarousel = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Bootstrap/carousel.js

        fancybox = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Fancybox/jquery.fancybox.js
        plyr = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Plyr/plyr.js
        cookiebar = {$threeme.enable.publicBasePath}/JavaScript/Vendor/Cookiebar/jquery.cookieBar.js

        website = {$threeme.enable.publicBasePath}/JavaScript/Frontend/jquery.threeme.js
    }

    20 < lib.threemeFluidTemplate
}


# Compile your CSS dynamically with third party extensions like "ws_scss".
# Refer documentation of your preferred extension - the code below is related to EXT:ws_scss.
[globalVar = LIT:0 < {$threeme.enable.useSassExt}]
    page {
        includeCSS >
        includeCSS {
            website = {$threeme.enable.privateBasePath}/Sass/styles-frontend.scss
            website.outputdir = {$threeme.enable.publicBasePath}/Css
            # Output format: Expanded, Nested, Compressed, Compact, Crunched
            website.formatter = Leafo\ScssPhp\Formatter\Nested
            website.linenumber = true

            print = {$threeme.enable.privateBasePath}/Sass/styles-print.scss
            print.outputdir = {$threeme.enable.publicBasePath}/Css
            print.formatter = Leafo\ScssPhp\Formatter\Nested
            print.linenumber = true
            print.media = print
        }
    }
[global]


# RTE CSS
# When compiling your CSS by a third party extension like "ws_scss", only files in page.includeCSS are respected.
# This workarround will add the RTE Sass file to page.includeCSS too, so it being compiled like any other file.
# RTE.default.contentCSS includes the compiled Sass file from EXT:threeme/Resources/Public/Css/styles-rte.css.
#
# Hint:
# If you have activated "compileRteCssFromSass", be sure your Frontend is uncached and the RTE CSS is included correctly.
# In some cases third party compiler like "ws_scss" don't generate the "styles-rte.css" in EXT:threeme/Resources/Public/Css/ by default.
# It's because there a no changes to the related SASS "_styles-rte.scss". Edit this file, write some garbage, save and reload the Frontend.
# The SASS compiler will throw an error, so you know it's working right now. Remove your trash from "_styles-rte.scss" and
# reload the Frontend again. Now everything is fine and the compiler will generate the "styles-rte.css".
[globalVar = LIT:0 < {$threeme.enable.compileRteCssFromSass}]
    page {
        includeCSS {
            rte = {$threeme.enable.privateBasePath}/Sass/styles-rte.scss
            rte.forceOnTop = 1
            rte.outputdir = {$threeme.enable.publicBasePath}/Css
            rte.formatter = Leafo\ScssPhp\Formatter\Nested
            rte.linenumber = true
        }
    }
[global]


# Prepare SASS parser for production environment.
[applicationContext = Production] && [globalVar = LIT:0 < {$threeme.enable.useSassExt}]
    page {
        includeCSS {
            website.formatter = Leafo\ScssPhp\Formatter\Crunched
            website.linenumber = false
            print.formatter = Leafo\ScssPhp\Formatter\Crunched
            print.linenumber = false
            rte >
        }
    }
[global]


# Add website analytics only in production environment and only if it is enabled.
[applicationContext = Production] && [globalVar = LIT:0 < {$threeme.enable.websiteAnalytics}]
    page {
        jsInline {
            # Include GoogleAnalytics, change code for other trackers
            200 = COA
            200 {
                # Opt-out Cookie
                10 = TEXT
                10.value (
                    var gaProperty = '{$threeme.enable.websiteAnalyticsCode}';
                    var disableStr = 'ga-disable-' + gaProperty;
                    if (document.cookie.indexOf(disableStr + '=true') > -1) {
                        window[disableStr] = true;
                    }
                    function gaOptout() {
                        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                        window[disableStr] = true;
                    }
                )
                # Tracklet
                20 = TEXT
                20.value (
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', '{$threeme.enable.websiteAnalyticsCode}', 'auto');
                    ga('require', 'linkid', 'linkid.js');
                    ga('require', 'displayfeatures');
                    ga('set', 'anonymizeIp', true);
                    ga('send', 'pageview');
                )
            }
        }
    }
[global]
