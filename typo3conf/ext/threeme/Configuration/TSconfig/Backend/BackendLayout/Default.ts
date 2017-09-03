mod.web_layout.BackendLayouts {
    Default {
        icon = EXT:threeme/Resources/Public/Images/BackendLayout/Default.png
        title = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:BackendLayouts.default.title
        
        config {
            backend_layout {
                colCount = 2
                rowCount = 3
                rows {
                    1 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.200
                                # Columns 100+ = header, 200+ = Content, 300+ = Footer
                                colPos = 200
                                colspan = 2
                            }
                        }
                    }
                    2 {
                        columns {
                            1 {
                                name = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.colPos.altLabels.0
                                colPos = 0
                                colspan = 2
                            }
                        }
                    }
                    3 {
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
                                colspan = 1
                            }
                        }
                    }
                }
            }
        }
    }
}