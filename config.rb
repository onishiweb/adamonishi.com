require 'compass/import-once/activate'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "scss"
images_dir = "images"
javascripts_dir = "js"
fonts_dir = "fonts"

fonts_path = "../fonts"
http_fonts_path = "/wordpress/wp-content/themes/simple-theme/fonts"
http_fonts_dir = "../fonts"

http_generated_images_path = "/wordpress/wp-content/themes/simple-theme/images"
http_images_path = "../images"

# You can select your preferred output style here (can be overridden via the command line):
output_style = (environment == :production) ? :compressed : :expanded
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass


# Require any additional compass plugins here.