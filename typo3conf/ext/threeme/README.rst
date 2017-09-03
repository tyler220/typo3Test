========================================================================================================================
Threeme Distribution
========================================================================================================================

About the distribution
----------------------

Threeme is free and our contribution to the TYPO3 community.
The distribution is not supposed to compete with other templating concepts and
extensions such as "Themes" or the "Bootstrap Package", it pursues a completely different philosophy:

Threeme is aimed at experienced frontend developers who already know TYPO3, but also for those who want to become one.
It offers a preconfigured TYPO3 distribution, which does not want to create universal requirements,
but offers strong defaults in a flexible structure in order to efficiently implement complex individual programming.

Threeme works standalone to minimize security risks and dependencies to third-party extensions.
However, it provides configurations and examples for the extensions Mask, News, Powermail and RealUrl.

Hint
----
* **Version 3.0.0 is first one for public usage**
* **Version 4.0.0 is targeting TYPO3 8.7**

========================================================================================================================
Target groups
========================================================================================================================

Frontend Developer
------------------

The frontend developer gets a unified, clear structure that provides orientation and quick access
to the design of website and content as well as the configuration of TYPO3.

If possible, only Fluid and SASS will be used, TypoScript will be avoided by a Constants set.
Templates for "standard" extensions and examples for the integration of new elements and content complete the picture.
These strong defaults avoid constantly reinventing the wheel, so that more time for the implementation of complex requirements remains.

TYPO3 Integrator
----------------

The Backend is optimized according to a well thought-out scheme: It is reduced to essential features and options.
Instructions and examples for integrators, as well as a customer or editor, enable individual adaptations and targeted editorial work.

Editors
-------

The functions provided by the integrator focus on the daily work of the (chief) editors and their handling of TYPO3:
Entry barriers are reduced, the learning curve flattened, the user experience with the CMS TYPO3 increased.

========================================================================================================================
Installation
========================================================================================================================

Threeme is designed in such a way that it works without additional extensions.
If you do not want to use the following extensions, some empty contents will remain in the page tree.
This mainly refers to the extension Mask.

Since Threeme is a TYPO3 distribution, it brings a preconfigured page tree, image and text files as well as
some content of the extensions News, Mask and Powermail. For RealURL there is also a basic configuration.

The distribution works with SASS instead of pure CSS, so the SCSS can be compiled directly on the server using EXT:ws_scss.
If you prefer to keep the full control, a config.rb can be used for compiling via SASS or Compass.

**Read about preparation first, then simply install Threeme by the Extension Manager**

Preparation
-----------

If you want to use Threeme out of the box quite comfortably and do not want to make adjustments yourself,
you should install some popular extensions via the expansion manager.
Threeme "detects", if one of the following extensions is installed and binds it automatically.

Each of these extensions is self-sufficient and, of course, can be configured as desired within the scope of the respective documentation.
Depending on the extension, templates etc. are already stored in Threeme.

Please install to following extensions:


* SASS compiler for TYPO3 - EXT:ws_scss
* Mask - EXT:mask
* News System - EXT:news
* Powermail - EXT:powermail
* Speaking URLs for TYPO3 - EXT:realurl
* Minifier for TYPO3 - EXT:min

By the way, Threeme provides the following TYPO3 System Extensions configurations with TypoScript, Fluid, and SASS:

* Fluid Styled Content
* Indexed Search (optional, example configuration)
* Felogin (optional, example configuration)

Extension Mask
--------------

Mask provides you own content elements, Threeme offers you e.g. an accordion or slider:
Before Threeme is installed, the paths have to be adjusted in the mask configuration.
You can do this in the Extension Manager or directly via the backend module of Mask the settings.

Finally, please perform a Database-Compare via the Install-Tool!

Mask ofers three tabs – General, Frontend, and Backend –which have to linked to Threeme:

General:
* general.json: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Config/mask.json

Frontend:
* frontend.content: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/
* frontend.layouts: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/Layouts/
* frontend.partials: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/Partials/

Backend:
* backend.backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/
* backend.layouts_backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/Layouts/
* backend.partials_backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/Partials/
* backend.preview: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Preview/

Extension RealURL
-----------------

If you want to get your RealURL configuration from Threeme,
you can change the following fields in the RealURL configuration via Extension Manager:

* basic.configFile: typo3conf/ext/threeme/Resources/Private/Php/Extensions/Realurl/Configuration.php
* basic.enableAutoConf: 0


========================================================================================================================
Installation successful? I have a Threeme
========================================================================================================================

Finally edit the following Install-Tool values:

* BE|explicitADmode: explicitAllow
* FE|pageNotFound_handling: /404.html


Community
---------

Be cordially invited to participate actively in the further development.
Issues should be sent to the appropriate extension on GitHub.

* `Complete documentation in german language at Threeme.de <https://www.threeme.de>`_
* `Threeme on GitHub <https://github.com/AstCommodore/threeme>`_
* André on Slack TYPO3 channel: @commodore
* Mail: andre@threeme.de
