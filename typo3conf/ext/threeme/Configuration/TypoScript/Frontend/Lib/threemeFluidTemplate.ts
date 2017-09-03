lib.threemeFluidTemplate = FLUIDTEMPLATE
lib.threemeFluidTemplate {
    templateName = TEXT
    templateName.stdWrap {
        cObject = TEXT
        cObject {
            data = levelfield:-2, backend_layout_next_level, slide
            override.field = backend_layout
            split {
                token = pagets__
                1.current = 1
                1.wrap = |
            }
        }
        ifEmpty = Default
    }

    layoutRootPaths {
        10 = {$threeme.enable.privateBasePath}/Fluid/Frontend/Layouts
    }

    partialRootPaths {
        10 = {$threeme.enable.privateBasePath}/Fluid/Frontend/Partials
    }

    templateRootPaths {
        10 = {$threeme.enable.privateBasePath}/Fluid/Frontend/Templates
    }

    variables {
        # Über die Konstante threeme.enable.fluidLayoutSection können FLUID-Layouts definiert werden.
        # In FLUID wird dann eine andere Section aus dem FLUID Template genutzt.
        fluidLayoutSection = TEXT
        fluidLayoutSection.value = {$threeme.enable.fluidLayoutSection}
        
        siteTitle = TEXT
        siteTitle.data = TSFE:tmpl|setup|sitetitle
    }
}