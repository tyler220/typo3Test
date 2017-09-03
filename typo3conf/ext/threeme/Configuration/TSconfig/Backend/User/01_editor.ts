admPanel {
    enable {
        preview = 1
        cache = 1
        publish = 0
        edit = 1
        tsdebug = 0
        info = 0
    }
    override {
        edit.displayFieldIcons = 1
        edit.displayIcons = 1
        edit.editFormsOnPage = 1
        edit.editNoPopup = 1
    }
    hide = 0
}

options {
    pageTree {
        # If set, the titles in the page navigation tree will have their ID numbers printed before the clickable title.
        showPageIdWithTitle = 1

        # SEO settings: Use expanded page title for "speaking SEO title" and navTitle for menus / backend.
        # If set, the navigation title is displayed in the page navigation tree instead of the normal page title.
        # The page title is showed in a tooltip if the mouse hovers the navigation title.
        showNavTitle = 1
    }

    file_list {
        filesPerPage = 50
    }
}
