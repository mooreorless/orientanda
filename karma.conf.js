module.exports = function (config) {
  config.set({
    frameworks: ['jasmine'],
    reporters: ['spec'],
    browsers: ['PhantomJS'],
    files: [
      '_build/resources/frameworks/angular.min.js',
      '_build/app.js',
      '_tests/**/*.js'
    ]
  })
}
