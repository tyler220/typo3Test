# Save the original a tag configuration for further manipulation
lib.threemeParseFuncATagConfig < lib.parseFunc.tags.a
lib.threemeParseFuncATagConfig {
    typolink {
        # CK Editor Bug : https://forge.typo3.org/issues/80985
        parameter.HTMLparser = 1
        parameter.HTMLparser {
            htmlSpecialChars = -1
        }

        # Add Threeme fontawesome class
        ATagBeforeWrap = 1
        wrap.prepend = TEXT
        wrap.prepend {
            data = parameters : class
            # Split by space will return the first class we want to use
            listNum.splitChar = 32
            required = 1
            wrap = <i class="fa threeme-ui-|" aria-hidden="true"></i>
        }
    }
}

lib.parseFunc {
    tags {
        # Delete original a tag configuration
        a >

        # Introduce CASE for a tag configuration
        a = CASE
        a {
            # Configure the link by its first class
            key.data = parameters : class
            key.split {
                token.char = 32
                returnKey = 0
            }

            # Default link configuration
            default < lib.threemeParseFuncATagConfig
            # Remove Threeme fontawesome class form default link
            default.typolink.wrap.prepend >

            # Internal link + Threeme awesome class
            internal-link =< lib.threemeParseFuncATagConfig

            # External link + Threeme awesome class
            external-link =< lib.threemeParseFuncATagConfig

            # Mail link + Threeme awesome class
            mail =< lib.threemeParseFuncATagConfig

            # Download link + Threeme awesome class
            download =< lib.threemeParseFuncATagConfig

            # Lightbox link configuration
            lightbox < lib.threemeParseFuncATagConfig
            lightbox {
                typolink.ATagParams.cObject = COA
                typolink.ATagParams.cObject {
                    10 = TEXT
                    10.data = parameters : allParams

                    # FancyBox v3.1 integration for lightbox link
                    20 = CASE
                    20 {
                        # Get domain from href
                        # Nice example http://blog.teamgeist-medien.de/2014/09/parsefunc-links-in-typolinks-umwandeln.html
                        key {
                            data = parameters : href
                            # Remove protocol and possible subdomain
                            stdWrap.replacement {
                                10.search = http://
                                10.replace =
                                20.search = https://
                                20.replace =
                                30.search = www.
                                30.replace =
                            }
                            # Split href by dot, return only the domain
                            split {
                                token = .
                                returnKey = 0
                            }
                        }

                        # External lightbox link has to be opened in a iFrame, so the FancyBox needs some additional data attributes
                        default = TEXT
                        default {
                            typolink.parameter.data = parameters : href
                            typolink.returnLast = url
                            wrap = data-type="iframe" data-src="|"
                        }

                        # FancyBox build in support doesn't need additional configuration
                        vimeo = TEXT
                        youtube = TEXT
                        youtu = TEXT
                        google = TEXT
                        instagram = TEXT
                    }
                }
            }
        }
    }
}
