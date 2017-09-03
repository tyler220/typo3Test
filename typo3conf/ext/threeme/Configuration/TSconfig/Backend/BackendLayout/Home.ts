mod.web_layout.BackendLayouts {
    Home {
        icon = EXT:threeme/Resources/Public/Images/BackendLayout/Home.png
        title = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:BackendLayouts.home.title
        
        config {
            backend_layout {
                colCount = 3
                rowCount = 5
                rows {
                    1 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.200
                                # Columns 100+ = header, 200+ = Content, 300+ = Footer
                                colPos = 200
                                colspan = 3
                            }
                        }
                    }
                    2 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.201
                                colPos = 201
                                colspan = 3
                            }
                        }
                    }
                    3 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.202
                                colPos = 202
                                colspan = 3
                            }
                        }
                    }
                    4 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.1
                                colPos = 1
                                colspan = 1
                            }
                            2 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.0
                                colPos = 0
                                colspan = 1
                            }
                            3 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.2
                                colPos = 2
                                colspan = 1
                            }
                        }
                    }
                    5 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.300
                                # Columns 100+ = header, 200+ = Content, 300+ = Footer
                                colPos = 300
                                colspan = 1
                            }
                            2 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.302
                                # Columns 100+ = header, 200+ = Content, 300+ = Footer
                                colPos = 302
                                colspan = 2
                            }
                        }
                    }
                }
            }
        }
    }
}