page {
    meta {
        viewport = {$threeme.meta.viewport}
        robots = {$threeme.meta.robots}
        google-site-verification = {$threeme.meta.googleSiteVerification}
        format-detection = {$threeme.meta.formatDetection}

        keywords = {$threeme.meta.keywords}
        keywords.override.field = keywords

        description = {$threeme.meta.description}
        description.override.field = description
        description.crop = 156 || 1

        author = {$threeme.meta.author}
        author.override.field = author

        geo\.region = {$threeme.meta.geoRegion}
        geo\.placename = {$threeme.meta.geoPlacename}
        geo\.position = {$threeme.meta.geoPosition}
        ICBM = {$threeme.meta.ICBM}

        X-UA-Compatible = {$threeme.meta.compatible}
        X-UA-Compatible.attribute = http-equiv

        # OpenGraph Tags
        og:title {
            attribute = property
            field = navtitle
            ifEmpty.field = title
        }

        og:site_name {
            attribute = property
            data = TSFE:tmpl|setup|sitetitle
        }

        og:description = {$threeme.meta.description}
        og:description {
            attribute = property
            field = description
        }

        og:type = Website
        og:type.attribute = property

        og:image {
            attribute = property
            stdWrap.cObject = FILES
            stdWrap.cObject {
                references {
                    data = levelfield:-1, media, slide
                }
                maxItems = 1
                renderObj = COA
                renderObj {
                    10 = IMG_RESOURCE
                    10 {
                        file {
                            import.data = file:current:uid
                            treatIdAsReference = 1
                            width = 1280c
                            height = 720c
                        }
                        stdWrap {
                            typolink {
                                parameter.data = TSFE:lastImgResourceInfo|3
                                returnLast = url
                                forceAbsoluteUrl = 1
                            }
                        }
                    }
                }
            }
        }

        # Twitter
        twitter:card = summary
        twitter:card.attribute = property

        twitter:title  {
            attribute = property
            field = navtitle
            ifEmpty.field = title
        }

        twitter:description = {$threeme.meta.description}
        twitter:description {
            attribute = property
            field = description
        }

        twitter:site = {$threeme.meta.twitterAccount}
        twitter:site.attribute = property
    }
}
