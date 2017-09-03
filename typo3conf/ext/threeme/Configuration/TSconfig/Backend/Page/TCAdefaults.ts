TCAdefaults {
    sys_file_reference {
        showinpreview = 1
    }

    tt_content {
        imageborder = 0
        imagecols = 1
        uploads_type = 1
        uploads_description = 1
        filelink_size = 1
    }

    fe_users {
        tx_extbase_type = Tx_Extbase_Domain_Model_FrontendUser
    }

    fe_groups {
        tx_extbase_type = Tx_Extbase_Domain_Model_FrontendUserGroup
    }
}

# Special settings for sysfolders 15 = Lightbox-Seiten, 9 = Sonderseiten, 31 = Styleguide
# @TODO: Hardcoded page UIDs
[PIDinRootline = 15, 9, 31]
    TCAdefaults {
        pages {
            no_search = 1
        }
    }
[GLOBAL]
