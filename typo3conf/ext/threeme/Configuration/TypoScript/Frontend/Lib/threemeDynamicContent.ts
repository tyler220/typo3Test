# "dynamicContent" by EXT:bootstrap_package
lib.threemeDynamicContent = COA
lib.threemeDynamicContent {
    10 = LOAD_REGISTER
    10 {
        colPos.cObject = TEXT
        colPos.cObject {
            field = colPos
            ifEmpty.cObject = TEXT
            ifEmpty.cObject {
                value.current = 1
                ifEmpty = 0
            }
        }

        pageUid.cObject = TEXT
        pageUid.cObject {
            field = pageUid
            ifEmpty.data = TSFE:id
        }

        contentFromPid.cObject = TEXT
        contentFromPid.cObject {
            data = DB:pages:{register:pageUid}:content_from_pid
            data.insertData = 1
        }

        contentWrap.cObject = TEXT
        contentWrap.cObject {
            field = contentWrap
        }
    }

    20 = CONTENT
    20 {
        table = tt_content
        select {
            where = colPos={register:colPos}
            where.insertData = 1
            pidInList.data = register:pageUid
            pidInList.override.data = register:contentFromPid
        }
        
        renderObj {
            stdWrap {
                dataWrap = {register:contentWrap}
                required = 1
            }
        }
    }

    100 = RESTORE_REGISTER
}

# "dynamicContentSlide" by EXT:bootstrap_package
lib.threemeDynamicContentSlide =< lib.threemeDynamicContent
lib.threemeDynamicContentSlide.20.slide = -1