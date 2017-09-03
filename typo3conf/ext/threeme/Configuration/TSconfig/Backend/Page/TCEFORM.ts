TCEFORM {
    pages {
        alias.disabled = 1

        backend_layout {
            removeItems = -1
        }
        backend_layout_next_level {
            removeItems = -1
        }

        layout {
            removeItems = 1,2,3
        }
    }

    tt_content {
        CType {
            # Removed reintroduced "CSS Styled Content" content elements
            removeItems := addToList(text,textpic,image)
        }

        header_layout {
            removeItems = 5
            altLabels.0 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.0
            altLabels.1 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.1
            altLabels.2 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.2
            altLabels.3 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.3
            altLabels.4 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.4
            altLabels.5 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.5
        }

        header_position {
            altLabels.left = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.left
            altLabels.center = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.center
            altLabels.right = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.right
            addItems.justify = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.justify
            addItems.justify.icon = threeme-tca-icon
        }

        # Header layout CSS
        tx_threeme_header_css {
            addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.threeme_header_css.addItems.200
            addItems.200.icon = threeme-tca-icon
            addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.threeme_header_css.addItems.201
            addItems.201.icon = threeme-tca-icon
        }

        # Content layout depending on CType
        layout {
            removeItems = 1,2,3
            types {
                textmedia {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.200
                    addItems.200.icon = threeme-tca-icon
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.201
                    addItems.201.icon = threeme-tca-icon
                    addItems.202 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.202
                    addItems.202.icon = threeme-tca-icon
                }
                table {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.200
                    addItems.200.icon = threeme-tca-icon
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.201
                    addItems.201.icon = threeme-tca-icon
                    addItems.202 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.202
                    addItems.202.icon = threeme-tca-icon
                    addItems.203 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.203
                    addItems.203.icon = threeme-tca-icon
                }
                bullets {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.bullets.addItems.200
                    addItems.200.icon = threeme-tca-icon
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.bullets.addItems.201
                    addItems.201.icon = threeme-tca-icon
                }
            }
        }

        space_before_class {
            removeItems = extra-small,small,large
            altLabels.extra-small = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_before_class.altLabels.extra-small
            altLabels.small = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_before_class.altLabels.small
            altLabels.medium = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_before_class.altLabels.medium
            altLabels.large = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_before_class.altLabels.large
            altLabels.extra-large = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_before_class.altLabels.extra-large
        }

        space_after_class {
            removeItems = extra-small,small,large
            altLabels.extra-small = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_after_class.altLabels.extra-small
            altLabels.small = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_after_class.altLabels.small
            altLabels.medium = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_after_class.altLabels.medium
            altLabels.large = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_after_class.altLabels.large
            altLabels.extra-large = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.space_after_class.altLabels.extra-large
        }

        # Image settings
        # If you use responsive images by "lib.threemeResponsiveImage" or a thrid party extension, you might disable some image settings like "imagewidth".
        imagecols {
            removeItems = 5,6,7,8
        }
        imageorient {
            removeItems = 8,9,10
        }

        # Bullets settings
        bullets_type {
            removeItems = 2
        }
    }

    # Image manipulation, override cropVariants
    sys_file_reference {
        crop {
            config {
                cropVariants {
                    default {
                        title = LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:imageManipulation.desktop
                        selectedRatio = NaN
                        allowedAspectRatios {
                            NaN {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free
                                value = 0.0
                            }
                            21:9 {
                                title = 21:9
                                value = 2.3333333
                            }
                            16:9 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9
                                value = 1.7777777
                            }
                            4:3 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3
                                value = 1.3333333
                            }
                            3:2 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2
                                value = 1.5
                            }
                            1:1 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1
                                value = 1
                            }
                        }
                    }
                    tablet {
                        title = LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:imageManipulation.tablet
                        selectedRatio = 16:9
                        allowedAspectRatios {
                            NaN {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free
                                value = 0.0
                            }
                            21:9 {
                                title = 21:9
                                value = 2.3333333
                            }
                            16:9 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9
                                value = 1.7777777
                            }
                            4:3 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3
                                value = 1.3333333
                            }
                            3:2 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2
                                value = 1.5
                            }
                            1:1 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1
                                value = 1
                            }
                        }
                    }
                    mobile {
                        title = LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:imageManipulation.mobile
                        selectedRatio = 1:1
                        allowedAspectRatios {
                            NaN {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free
                                value = 0.0
                            }
                            21:9 {
                                title = 21:9
                                value = 2.3333333
                            }
                            16:9 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9
                                value = 1.7777777
                            }
                            4:3 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3
                                value = 1.3333333
                            }
                            3:2 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2
                                value = 1.5
                            }
                            1:1 {
                                title = LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1
                                value = 1
                            }
                        }
                    }
                }
            }
        }
    }

    # EXT:Powermail settings
    tx_powermail_domain_model_form {
        css {
            removeItems = layout1,layout2,layout3
            altLabels.nolabel = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tx_powermail_domain_model_form.css.altLabels.nolabel
        }
    }
    tx_powermail_domain_model_page {
        css {
            removeItems = layout1,layout2,layout3
            altLabels.nolabel = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tx_powermail_domain_model_page.css.altLabels.nolabel
        }
    }
    tx_powermail_domain_model_field {
        css {
            removeItems = layout1,layout2,layout3
            altLabels.nolabel = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tx_powermail_domain_model_field.css.altLabels.nolabel
        }
    }
}
