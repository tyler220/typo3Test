/*
    Ausgabe der Systemkategorien des aktuellen Inhaltelements per TS-Lib und Viewhelper

    <f:alias map="{categories: '{f:cObject(typoscriptObjectPath:\'lib.threemeSysCategory\', data:\'{contentUid: data.uid}\')}'}">
        <f:for each="{threeme:decodeJson(json:'{categories}')}" as="category">
            {category.uid},{category.title}
        </f:for>
    </f:alias>
*/
lib.threemeSysCategory = COA
lib.threemeSysCategory {
    10 = LOAD_REGISTER
    10 {
        contentUid.cObject = TEXT
        contentUid.cObject {
            field = contentUid
        }

        contentTable.cObject = TEXT
        contentTable.cObject {
            field = contentTable
            ifEmpty.cObject = TEXT
            ifEmpty.cObject.value = tt_content
        }
    }

    20 = CONTENT
    20 {
        table = sys_category
        select {
            pidInList = {$threeme.frontend.pidSysCategory}
            selectFields = sys_category.uid, sys_category.title
            join = sys_category_record_mm ON (sys_category_record_mm.uid_local = sys_category.uid)
            where = sys_category_record_mm.fieldname='categories' AND sys_category.hidden = 0  AND sys_category.deleted = 0

            andWhere.cObject = COA
            andWhere.cObject {
                10 = TEXT
                10 {
                    data = register:contentTable
                    wrap = sys_category_record_mm.tablenames='|'
                }
                20 = TEXT
                20 {
                    data = register:contentUid
                    noTrimWrap = | AND sys_category_record_mm.uid_foreign = ||
                }
            }

        }

        wrap = [|]

        renderObj = COA
        renderObj {
          wrap = {|},

          10 = TEXT
          10.value = "uid":"{field:uid}",
          10.insertData = 1

          20 = TEXT
          20.value = "title":"{field:title}"
          20.insertData = 1
        }
    }

    100 = RESTORE_REGISTER
}
