## Threeme Change-Log


### 2017-01-13  Version 3.0.0

* [TASK] Initial upload stable version 3.0.0

### 2017-01-19  Version 3.0.1

* [TASK] Updated composer
* [DOC] Cleaned out readme file
* [DOC] Added ChangeLog file
* [STYLE] Changed indexed search browsebox to inline list

### 2017-01-26  Version 3.0.2
* [FIX] Fixed broken suggestions in composer.json 
* [REFACTOR] Changed TypoScript to .ts for better IDE support
* [TASK] Minor changes to data.t3d file

### 2017-02-13  Version 3.0.3
* [TASK] Updated pagePath setup in RealURL config
* [TASK] Cleaned out .gitignore file
* [REFACTOR] Minor changes to composer.json
* [REFACTOR] Mapped composer.json to ext_emconf.php
* [FEATURE] Added support for extension "min"
* [REFACTOR] Moved jQuery from includeFooter to includeFooterLibs
* [FEATURE] Added removePageCss to constants set and config

### 2017-03-01  Version 3.1.0
* [FEATURE] Added ascii spam protection to constants set and config
* [FEATURE] Changed removeDefaultJS to 1 because of ascii spam protection 
* [REFACTOR] Removed unused Bootstrap SASS partials
* [TASK] Changed FLUID namespace declaration to modern xmlns
* [TASK] Enabled smoothScroll by generic class threeme-ui-scroll instead of binding to threeme-ui-totop
* [REFACTOR] Positioned screen-xs condition at end of type.scss
* [TASK] Improved pagetree and RealURL configuration
* [FEATURE] Added additionalBodyAttribute to constants set and bodyTagCObject
* [FEATURE] Added TCA field 'css' as new option for cType header
* [TASK] Improved use of additional CSS classes for cType header 
* [TASK] Improved usergroup configuration
* [FEATURE] Improved carousel animation / CSS transition
* [TASK] Used userFunc condition to auto-include TypoScript of 3rd party EXTs 
* [FEATURE] Added new TypoScript lib 'threemeWatermarkedImage' as alternative image rendering option
* [REFACTOR] Added wrapper classes for field 'layout' of cType image

### 2017-04-13  Version 3.1.1
* [FIX] Minor changes to news + realurl configuration, deactivated hrdate to respect news sitemap
* [FEATURE] Added canonical tag to headerData.ts
* [FEATURE] Added sitename and favicon to constants set
* [DOC] Minor changes to the readme and comments in constants.txt and page.ts
* [REFACTOR] Optimized file size for login background image by Guetzli
* [DOC] Minor changes to doc and comments
* [FEATURE] Updated EXT:Powermail to version 3.15.0
* [FEATURE] Updated EXT:Min 1.3
* [FIX] Added condition to hide hidden MASK records in BE

### 2017-04-18  Version 3.1.2
* [STYLE] Added distribution preview images
* [STYLE] Improved ext_icon.svg
* [FIX] Improved ext_emconf.php
* [DOC] Improved documentation pagetree in data.t3d

### 2017-05-22  Version 3.1.3
* [FIX] Improved carousel for Mask version 3.0.1+

### 2017-06-21  Version 4.0.0
* [TASK] Minimum TYPO3 version 8.7
* [TASK] Updated data.t3d file for TYPO3 8.7
* [TASK] Splitted TSconfig into Backend and Extensions subfolder
* [TASK] Updated felogin TS to 8.7
* [TASK] Updated indexed_search TS to 8.7
* [TASK] Updated fluid_styled_content TS to 8.7
* [TASK] Updated mask TS to 8.7
* [FIX] Disabled EXT:min in environments other than production
* [FIX] Migrated TCA to be compatible to 8.7
* [TASK] Minor changes refer to 8.7 pageTS
* [TASK] New mail constants in Threeme settings
* [TASK] Updated to news to 6.0.0
* [FEATURE] Implemented new cropVariant / responsive images for FSC
* [FEATURE] Implemented CKEditor configuration
* [TASK] Resolved issue https://github.com/AstCommodore/threeme/issues/7 
* [FIX] Many minor improvements all over the code
* [TASK] Resolved issue https://github.com/AstCommodore/threeme/issues/8
* [TASK] Resolved issue https://github.com/AstCommodore/threeme/issues/6
* [FEATURE] Implemented new cropVariant / responsive images for MASK elements

### 2017-08-04  Version 4.0.1
* [TASK] Resolved issue https://github.com/AstCommodore/threeme/issues/10
* [FEATURE] Added support and example form for EXT:form
* [TASK] Removed support for EXT:powermail, TS and Fluid are still there
* [CLEANUP] Minor clean ups

### 2017-0x-0x  Version 4.1.0
* [FEATURE] Integration of the new frontend editing by EXT:frontend_editing
* [TASK] Raised jQuery version to 3.2.1
* [FEATURE] Integration of FancyBox v3.1 lightbox
* [TASK] Updated HTML5 player 'Plyr' to v2.0.8 and restricted it to class .plyr
* [REFACTOR] Renamed constant googleWebmaster into googleSiteVerification
* [TASK] Introduced geo meta tags, optimized meta
