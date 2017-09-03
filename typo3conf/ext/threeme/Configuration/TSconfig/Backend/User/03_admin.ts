[adminUser = 1]
    options {
        pageTree {
            # If set, the titles in the page navigation tree will have their ID numbers printed before the clickable title.
            showPageIdWithTitle = 1
        }
    }
    
    admPanel {
      # Disable caching for external TypoScript
      override.tsdebug.forceTemplateParsing = 1
    }
[GLOBAL]
