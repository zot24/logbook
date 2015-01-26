elixir = require 'laravel-elixir'
paths = require('./paths')(elixir.config)

require 'laravel-elixir-bower'

elixir (mix) ->
  mix
    # contact, minify/uglify bower files
    .bower('vendor.css', paths.assets.compiled.styles, 'vendor.js', paths.assets.compiled.scripts)
    # compile less files
    .less("*", paths.assets.compiled.styles)
    # compile coffee files
    .coffee("*", paths.assets.compiled.scripts)
    # copy files
    .copy(paths.vendor.path + "bootstrap/dist/fonts", "public/fonts")
    .copy(paths.vendor.path + "html5shiv/dist/html5shiv.min.js", paths.output.js + "html5shiv.js")
    .copy(paths.vendor.path + "respond/dest/respond.min.js", paths.output.js + "respond.js")
    # frontend compiled
    .styles([
      paths.assets.compiled.styles + "vendor.css"
      paths.assets.compiled.styles + "frontend.css"
    ], "./", paths.output.css + "frontend.css")
    # backend compiled
    .styles([
      paths.assets.compiled.styles + "vendor.css"
      paths.assets.compiled.styles + "backend.css"
    ], "./", paths.output.css + "backend.css")
    # frontend scripts
    .scripts([
      paths.assets.compiled.scripts + "vendor.js"
      paths.assets.scripts + "frontend.js"
      paths.assets.compiled.scripts + "frontend.js"
    ], "./", paths.output.js + "frontend.js")
    # backend scripts
    .scripts([
      paths.assets.compiled.scripts + "vendor.js"
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
