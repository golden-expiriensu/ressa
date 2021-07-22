let preprocessor = 'sass';

const {
  src,
  dest,
  parallel,
  series,
  watch
} = require('gulp');

const browserSync = require('browser-sync').create('ressa');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const sass = require('gulp-sass')(require('sass'));
const less = require('gulp-less');
const autoprefixer = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');
const del = require('del');
const rigger = require('gulp-rigger');
const htmlmin = require('gulp-htmlmin');

//------------------------------------------------------------//

function browsersync() {
  browserSync.init({
    proxy: "localhost",
    notify: false,
    online: true
  })
}

function scripts() {
  return src([
      'node_modules/jquery/dist/jquery.min.js',
      'app/js/main.js'
    ])
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(dest('dist/js/'))
    .pipe(browserSync.stream())
}

function styles() {
  return src('app/' + preprocessor + '/main.' + preprocessor + '')
    .pipe(eval(preprocessor)())
    .pipe(concat('app.min.css'))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 10 versions'],
      grid: true
    }))
    .pipe(cleancss({
      level: {
        1: {
          specialComments: 0
        }
      } /* , format: 'beautify' */
    }))
    .pipe(dest('dist/css/'))
    .pipe(browserSync.stream())
}

function images() {
  return src('app/images/src/**/*.*')
    .pipe(newer('dist/images/dest/'))
    .pipe(imagemin())
    .pipe(dest('dist/images/dest/'))
}

function html() {
  return src('app/**/*.html', {
      base: 'app'
    })
    .pipe(rigger())
    .pipe(htmlmin({
      collapseWhitespace: true,
      removeComments: true
    }))
    .pipe(dest('dist'))
}

function php() {
  return src('app/**/*.php', {
      base: 'app'
    })
    .pipe(dest('dist'));
}

function startwatch() {
  // JS
  watch(['app/**/*.js', '!app/**/*.min.js'], scripts);
  //SASS
  watch('app/**/' + preprocessor + '/**/*', styles);
  //HTML
  //watch('app/**/*.html').on('change', series(html, browserSync.reload));
  //IMAGES
  watch('app/images/src/**/*.*', images);
  //PHP
  watch('app/**/*.php').on('change', series(php, browserSync.reload));
}

function cleanimg() {
  return del('app/images/dest/**/*', {
    force: true
  })
}

function build() {
  html();
  return src([
      'app/css/**/*.min.css',
      'app/js/**/*.min.js',
      'app/images/dest/**/*',
    ], {
      base: 'app'
    })
    .pipe(dest('dist'))
}

function cleardist() {
  return del('dist/**/*', {
    force: true
  })
}

exports.browsersync = browsersync;
exports.scripts = scripts;
exports.styles = styles;
exports.images = images;
exports.html = html;
exports.cleanimg = cleanimg;
exports.cleardist = cleardist;

exports.build = build;

exports.default = series(parallel(styles, scripts, images, php), parallel(browsersync, startwatch));
