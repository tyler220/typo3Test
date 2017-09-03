mod {
    # Setup default language flag
    SHARED {
        defaultLanguageLabel = Deutsch
        defaultLanguageFlag = de
    }

    web_layout {
        # By default, TYPO3 will not allow you to mix translated content and independent content in the page module.
        # Content elements violating this behavior will be marked in the Page Module and there is no UI control allowing you to create independent content elements in a given language.
        allowInconsistentLanguageHandling = 0

        # Disable "QuickEdit" view
        menu.function {
            0 = 0
        }
    }

    wizards {
        newContentElement {
            wizardItems {
                # Removed reintroduced "CSS Styled Content" content elements
                common.show := removeFromList(text,textpic,image)
            }
        }
    }
}
