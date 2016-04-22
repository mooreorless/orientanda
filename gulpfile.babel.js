import gulp from 'gulp'
import path from 'path'
import del from 'del'
import rename from 'gulp-rename'
import concat from 'gulp-concat'

import htmlmin from 'gulp-htmlmin'

import jshint from 'gulp-jshint'
import babel from 'gulp-babel'
import ngannotate from 'gulp-ng-annotate'
import uglify from 'gulp-uglify'

import sass from 'gulp-sass'
import prefix from 'gulp-autoprefixer'
import comb from 'gulp-csscomb'
import optimise from 'gulp-csso'

import tplcache from 'gulp-angular-templatecache'

import imgmin from 'gulp-imagemin'
import imgcache from 'gulp-cache'

import bsync from 'browser-sync'
import {Server} from 'karma'

/*  index  */
gulp.task('index', ['index:tasks'], () => { bsync.reload() })
gulp.task('index:tasks', () => {
  return gulp.src('_source/index.html')
      .pipe(htmlmin({ collapseWhitespace: true }))
      .pipe(gulp.dest('_build'))
})

/*  javascript  */
gulp.task('javascript', ['javascript:tasks'], () => { bsync.reload() })
gulp.task('javascript:tasks', () => {
  return gulp.src('_source/javascript/**/*.js')
      .pipe(jshint({ asi: true, esversion: 6 }))
      .pipe(jshint.reporter('default'))
      .pipe(concat('app.js'))
      .pipe(babel({ presets: ['es2015'] }))
      .pipe(gulp.dest('_build'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(ngannotate())
      .pipe(uglify())
      .pipe(gulp.dest('_build'))
})

/*  stylesheets  */
gulp.task('stylesheets', ['stylesheets:tasks'], () => { bsync.reload() })
gulp.task('stylesheets:tasks', () => {
  return gulp.src([ '_source/styles/**/*.scss', '!_source/styles/**/_*' ])
      .pipe(sass({ outputStyle: 'expanded' }))
      .pipe(prefix({ browsers: ['> 5%'] }))
      .pipe(comb())
      .pipe(gulp.dest('_build'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(optimise())
      .pipe(gulp.dest('_build'))
})

/*  templates  */
gulp.task('templates', ['templates:tasks'], () => { bsync.reload() })
gulp.task('templates:tasks', () => {
  return gulp.src('_source/templates/**/*.html')
      .pipe(tplcache())
      .pipe(gulp.dest('_build'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(uglify())
      .pipe(gulp.dest('_build'))
})

/*  image resources  */
gulp.task('res:images', () => {
  return gulp.src('_source/resources/images/**/*')
      .pipe(imgcache(imgmin({ optimizationLevel: 3, progressive: true, interlaced: true })))
      .pipe(gulp.dest('_build/resources/images'))
      .pipe(bsync.stream())
})

/*  static resources  */
gulp.task('res:static', () => {
  return gulp.src([ '_source/resources/**/*', '!_source/resources/images/**/*' ])
      .pipe(gulp.dest('_build/resources'))
})

/*  test  */
gulp.task('test', (done) => {
  new Server({
    configFile: path.resolve('./karma.conf.js')
  }, done).start()
})

/*  default  */
gulp.task('default', () => {
  bsync({ server: '_build/' })

  gulp.watch(['_source/**/*'], (event) => {
    if (event.type === 'deleted') {
      let deletePath = event.path.replace(`${__dirname}/_source`, '_build')
      del(deletePath)
      del(deletePath.replace(/.([^.]*)$/, '.min.$1'))
    } else {
      gulp.start('res:static')
    }
  })

  gulp.watch('_source/index.html', ['index'])
  gulp.watch('_source/javascript/**/*.js', ['javascript'])
  gulp.watch('_source/styles/**/*.scss', ['stylesheets'])
  gulp.watch('_source/templates/**/*.tpl.html', ['templates'])
  gulp.watch('_source/resources/images/**/*', ['res:images'])
})

/* ci test */
gulp.task('ci:test', (done) => {
  new Server({
    configFile: path.resolve('./karma.conf.js'),
    singleRun: true
  }, done).start()
})

/* ci build */
gulp.task('ci:build', [
  'index:tasks',
  'javascript:tasks',
  'stylesheets:tasks',
  'templates:tasks',
  'res:images',
  'res:static'
])
