# UID of group "Editors: Extended Rights"
# @TODO: Hardcoded usergroup
[usergroup = 9]
    options {
        pageTree {
            # If set, the titles in the page navigation tree will have their ID numbers printed before the clickable title.
            showPageIdWithTitle = 1
        }
    }

    admPanel {
        enable {
            preview = 1
            cache = 1
            publish = 0
            edit = 1
            tsdebug = 0
            info = 1
        }
        override {
            edit.displayFieldIcons = 1
            edit.displayIcons = 1
            edit.editFormsOnPage = 1
            edit.editNoPopup = 1
        }
        hide = 0
    }

    # This will allow a non-admin user to clear frontend and page-related caches, plus some backend-related caches (that is everything including templates).
    options.clearCache.all = 1
[GLOBAL]
