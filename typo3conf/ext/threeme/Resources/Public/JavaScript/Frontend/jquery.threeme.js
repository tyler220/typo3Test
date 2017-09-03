var tx_threeme = (function() {
    return {

        /* jQuery lightbox fancyBox
         *
         * fancyBox v3.1.20
         *
         * Licensed GPLv3 for open source use
         * or fancyBox Commercial License for commercial use
         *
         * http://fancyapps.com/fancybox/
         * Copyright 2017 fancyApps
         * -------------------------------------------------------------------------------------------------
         */
        fancyboxLighbox : function() {
            $('.lightbox').fancybox({
                lang : 'de',
                loop : true,
                toolbar : true,
                buttons : [
                    'slideShow',
                    'fullScreen',
                    'thumbs',
                    'close'
                ],
                animationEffect : 'zoom',
                transitionEffect : 'fade',
                thumbs : {
                    autoStart : true
                },
                slideShow : {
                    autoStart : false,
                    speed     : 2500
                }
            });
        },

        // Page scrolling feature with easing plugin
        jQuerySmoothScroll : function() {
            $('.threeme-ui-scroll').on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: ($($anchor.attr('href')).offset().top)
                }, 1500, 'swing');
                event.preventDefault();
            });
        },

        /* Bootstrap Accordion
         * Declare active state of panel
         * -------------------------------------------------------------------------------------------------
         */
        bootstrapAccordion : function() {
            var   $bsPanel = $('.bs-panel')
                , $bsPanelCollapse = $bsPanel.find('.panel-collapse')
            ;

            $bsPanelCollapse
                .on('shown.bs.collapse', function() {
                    var $parent = $(this).parent();
                    $parent.addClass('active');
                })
                .on('hidden.bs.collapse', function() {
                    var $parent = $(this).parent();
                    $parent.removeClass('active');
                })
            ;
        },

        /* Bootstrap Tooltip
         * -------------------------------------------------------------------------------------------------
         */
        bootstrapTooltip : function() {
            $('[data-toggle="tooltip"]').tooltip();
        },

        /* jQuery CookieBar
         * https://github.com/carlwoodhouse/jquery.cookieBar
         * -------------------------------------------------------------------------------------------------
         */
        jQueryCookieBar : function() {
            $('.threeme-cookiebar').cookieBar({
                secure: false,
                path: '/',
//                domain: 'example.com',
                closeButton : '.threeme-cookiebar-close'
            });
        },

        /* Plyr media player
         * https://github.com/selz/plyr
         * -------------------------------------------------------------------------------------------------
         */
        plyr : function() {
            plyr.setup('.plyr');
        }

    };
})();

$(function() {
    tx_threeme.fancyboxLighbox();
    tx_threeme.jQuerySmoothScroll();
    tx_threeme.bootstrapAccordion();
    tx_threeme.jQueryCookieBar();
    tx_threeme.plyr();
});
