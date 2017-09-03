#
# HOWTO - Working with compass
#
# Use this configuration file to compile your SASS without a third party extensions like dyncss.
#
# +++ HINT +++
# If you use Compass, don't forget to switch the property "page.includeCSS" from .scss to .css.


# The environment mode. Defaults to :production, can also be :development
environment = :development

# The output style for the compiled css. One of: :nested, :expanded, :compact, or :compressed
output_style = (environment == :production) ? :compressed : :expanded

# Indicates whether the compass helper functions should generate relative urls from the generated css to assets,
# or absolute urls using the http path for that asset type.
#http_path = "/"
relative_assets = true

# Indicates whether line comments should be added to compiled css that says where the selectors were defined.
# Defaults to false in production mode, true in development mode.
line_comments = (environment == :production) ? false : true

# Syntax, can be :scss or :sass. Defaults to :scss.
preferred_syntax = :scss

# The directory where the sass is kept.
sass_dir = "./"

# The directory where the css stylesheets are kept.
css_dir = "../../Public/Css"

# The directory where the images are kept.
images_dir = "../../Public/Images"

# The directory where generated images are kept.
generated_images_dir = "../../Public/Images"

# The directory where the javascripts are kept.
javascripts_dir = "../../Public/JavaScript"

# The directory where the font files are kept.
fonts_dir = "../../Public/Fonts"
