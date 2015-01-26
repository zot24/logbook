elixir = require 'laravel-elixir'
paths = require('./paths')(elixir.config)

###
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
###

elixir (mix) ->
  mix
    # compile less files
    .less("*", paths.assets.compiled.styles)
    # compile coffee files
    .coffee("*", paths.assets.compiled.scripts)
    # copy files
    .copy(paths.vendor.bootstrap.path + "fonts", "public/fonts")
    .copy(paths.vendor.path + "html5shiv/dist/html5shiv.min.js", paths.output.js + "html5shiv.js")
    .copy(paths.vendor.path + "respond/dest/respond.min.js", paths.output.js + "respond.js")
    # frontend compiled
    .styles([
      paths.vendor.bootstrap.css + "bootstrap.min.css"
      paths.vendor.bootstrap.css + "bootstrap-theme.min.css"
      paths.assets.compiled.styles + "frontend.css"
    ], "./", paths.output.css + "frontend.css")
    # backend compiled
    .styles([
      paths.vendor.bootstrap.css + "bootstrap.min.css"
      paths.vendor.bootstrap.css + "bootstrap-theme.min.css"
      paths.assets.compiled.styles + "backend.css"
    ], "./", paths.output.css + "backend.css")
    # frontend scripts
    .scripts([
      paths.vendor.jquery + "jquery.js"
      paths.vendor.bootstrap.js + "bootstrap.min.js"
      paths.assets.scripts + "frontend.js"
      paths.assets.compiled.scripts + "frontend.js"
    ], "./", paths.output.js + "frontend.js")
    # backend scripts
    .scripts([
      paths.vendor.jquery + "jquery.js"
      paths.vendor.bootstrap.js + "bootstrap.min.js"
      paths.assets.scripts + "backend.js"
      paths.assets.compiled.scripts + "backend.js"
    ], "./", paths.output.js + "backend.js")
    # PHPUnit
    .phpUnit()
    # PHPSpec
    .phpSpec()
    # cache-buster assets
    .version [
      "css/backend.css"
      "css/frontend.css"
      "js/backend.js"
      "js/frontend.js"
    ]
