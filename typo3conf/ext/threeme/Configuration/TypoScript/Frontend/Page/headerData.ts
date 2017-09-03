page {
    headerData = COA
    headerData {
        # Canonical Tag
        20 = TEXT
        20 {
            typolink {
                parameter.data = TSFE:id
                useCacheHash = 1
                addQueryString = 1
                addQueryString.method = GET
                addQueryString.exclude = id, cHash, tx_ttnews[pointer], tx_indexedsearch[sword]
                forceAbsoluteUrl = 1
                returnLast = url
            }
            wrap = <link rel="canonical" href="|">
        }

        # Extended Favicons
        40 = TEXT
        40.value (
            <link rel="apple-touch-icon" sizes="180x180" href="typo3conf/ext/threeme/Resources/Public/Images/Frontend/Favicon/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="typo3conf/ext/threeme/Resources/Public/Images/Frontend/Favicon/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="typo3conf/ext/threeme/Resources/Public/Images/Frontend/Favicon/favicon-16x16.png" sizes="16x16">
            <link rel="manifest" href="typo3conf/ext/threeme/Resources/Public/Images/Frontend/Favicon/manifest.json">
            <link rel="mask-icon" href="typo3conf/ext/threeme/Resources/Public/Images/Frontend/Favicon/safari-pinned-tab.svg" color="#ffffff">
            <meta name="msapplication-config" content="typo3conf/ext/threeme/Resources/Public/Images/Frontend/Favicon/browserconfig.xml">
            <meta name="theme-color" content="#ffffff">
        )
    }
}
