module.exports = (config) ->
  bowerDir  = config.bowerDir  + '/'
  cssOutput = config.cssOutput + '/'
  jsOutput  = config.jsOutput  + '/'
  assetsDir = config.assetsDir

  paths = {
    'output':
      'css': cssOutput
      'js': jsOutput
    'assets':
      'path': assetsDir
      'less': assetsDir + 'less/'
      'coffee': assetsDir + 'coffee/'
      'scripts': assetsDir + 'scripts/'
      'compiled':
        'styles' : assetsDir + 'compiled/styles/'
        'scripts' : assetsDir + 'compiled/scripts/'
    'vendor':
      'path': bowerDir
}