TCEMAIN {
    table {
        pages {
            disablePrependAtCopy = 0
            disableHideAtCopy = 0
        }
        tt_content {
            disablePrependAtCopy = 0
            disableHideAtCopy = 0
        }
    }

    permissions {
        # UID of group ". Access: Website Root"
        # @TODO: Hardcoded usergroup
        groupid = 12
        user = show,edit,delete,new,editcontent
        group = show,edit,delete,new,editcontent
        everybody =
    }

    translateToMessage = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:translateToMessage

    # EXT:news "to clear all caches of pages on which the news plugins are used but beware of performance issues when news records are edited often."
    clearCacheCmd = cacheTag:tx_news
}
