page {
    # Overwrite body-tag in order to add some more attributes
    bodyTagCObject >
    bodyTagCObject = COA
    bodyTagCObject {
        stdWrap.noTrimWrap = |<body |>|

        # Add page-id
        10 = TEXT
        10.value = id="page-{TSFE:id}"
        10.insertData = 1
        10.noTrimWrap = || |

        # Add data attributes for Grid displayer, http://alefeuvre.github.io/foundation-grid-displayer/
        20 = TEXT
        20.value = data-grid-framework="b3" data-grid-color="red" data-grid-opacity="0.5" data-grid-zindex="10" data-grid-gutterwidth="{$threeme.framework.bootstrap.gridGutterWidth}" data-grid-nbcols="{$threeme.framework.bootstrap.gridCols}"
        20.noTrimWrap = || |

        # Add data attributes for Bootstrap scrollspy
        30 = TEXT
        30.value = data-spy="scroll" data-target="{$threeme.framework.bootstrap.scrollspy.target}" data-offset="{$threeme.framework.bootstrap.scrollspy.offset}"
        30.noTrimWrap = || |

        # Add additional body attribute
        40 = TEXT
        40.value = {$threeme.enable.additionalBodyAttribute}
        40.noTrimWrap = || |

        # Body class
        100 = COA
        100 {
            wrap = class="|"

            # Add page layout class
            10 = TEXT
            10 {
                intval = 1
                data = page:layout
                noTrimWrap = |page-layout-| |
            }

            # Add backend_layout class
            20 = TEXT
            20 {
                case = lower
                data = page:backend_layout
                ifEmpty.data = levelfield:-2, backend_layout_next_level, slide
                noTrimWrap = |backend-layout-| |

                stdWrap.replacement {
                    10 {
                      search = pagets__
                      replace =
                    }
                }
            }

            # Add sys_category class
            30 = CONTENT
            30 {
            /*
                table = sys_category
                slide = -1
                select {
                    pidInList = {$threeme.frontend.pidSysCat}
                    selectFields = sys_category.title
                    join = sys_category_record_mm ON sys_category_record_mm.uid_local = sys_category.uid
                    where.data = page:uid // page:pid
                    where.intval = 1
                    where.wrap = sys_category_record_mm.uid_foreign=|
                }
            */
                # Get category from current page
                table = pages
                select {
                    uidInList.field = uid
                    pidInList.field = pid
                    selectFields = sys_category.title
                    join = sys_category_record_mm ON pages.uid = sys_category_record_mm.uid_foreign JOIN sys_category ON sys_category.uid = sys_category_record_mm.uid_local
                    where = sys_category_record_mm.tablenames = 'pages'
                }
                renderObj = TEXT
                renderObj {
                    field = title
                    case = lower
                    noTrimWrap = |sys-cat-| |

                    stdWrap.replacement {
                        10 {
                          search.char = 32
                          replace = -
                        }
                    }
                }
            }

            # Get category from parent page
            # @TODO: Slide back the rootline!
            30.stdWrap.ifEmpty.cObject = CONTENT
            30.stdWrap.ifEmpty.cObject {
                table = pages
                select {
                    uidInList.data = leveluid:-2, slide
                    uidInList.field = uid
                    pidInList.field = pid
                    selectFields = sys_category.title
                    join = sys_category_record_mm ON pages.pid = sys_category_record_mm.uid_foreign JOIN sys_category ON sys_category.uid = sys_category_record_mm.uid_local
                    where = sys_category_record_mm.tablenames = 'pages'
                }
                renderObj = TEXT
                renderObj {
                    field = title
                    case = lower
                    noTrimWrap = |sys-cat-| |

                    stdWrap.replacement {
                        10 {
                          search.char = 32
                          replace = -
                        }
                    }
                }
            }

            # Add additional body class
            40 = TEXT
            40.value = {$threeme.enable.additionalBodyClass}
            40.noTrimWrap = || |
        }
    }
}
