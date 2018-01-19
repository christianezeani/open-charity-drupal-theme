const gulp = require('gulp');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const minify = require('gulp-uglify');
const concat = require('gulp-concat');
const header = require('gulp-header');
const sass = require('gulp-sass');
// const browserify = require('gulp-browserify');

const Config = require('../config');
const Copyright = Config.Copyright;

const BASE_SOURCE_DIR = `${Config.SOURCE_BASE_DIR}/base`;
const BASE_SOURCE_JS_DIR = `${BASE_SOURCE_DIR}/js`;
const BASE_SOURCE_SCSS_DIR = `${BASE_SOURCE_DIR}/scss`;

const BASE_JS_ENTRY = [
  `${BASE_SOURCE_JS_DIR}/cyberpull.js`,
  `${BASE_SOURCE_JS_DIR}/libs/**/*.js`
];

const BASE_SCSS_ENTRY = [
  `${BASE_SOURCE_SCSS_DIR}/variables.scss`,
  `${BASE_SOURCE_SCSS_DIR}/functions.scss`,
  `${BASE_SOURCE_SCSS_DIR}/mixins.scss`,
  `${BASE_SOURCE_SCSS_DIR}/main.scss`,
  `${BASE_SOURCE_SCSS_DIR}/styles/**/*.scss`
];

const BASE_DESTINATION_DIR = `${Config.DESTINATION_BASE_DIR}/assets`;
const BASE_DESTINATION_JS_DIR = `${BASE_DESTINATION_DIR}/js`;
const BASE_DESTINATION_CSS_DIR = `${BASE_DESTINATION_DIR}/css`;



gulp.task('build-base-js', () => {
  return gulp.src(BASE_JS_ENTRY)
    .pipe(babel({ presets: ['env'] }))
    .pipe(concat('app.js'))
    .pipe(header(Copyright))
    .pipe(gulp.dest(BASE_DESTINATION_JS_DIR))
    .pipe(minify())
    .pipe(header(Copyright))
    .pipe(rename('app.min.js'))
    .pipe(gulp.dest(BASE_DESTINATION_JS_DIR));
});


gulp.task('build-base-scss', () => {
  return gulp.src(BASE_SCSS_ENTRY)
    .pipe(concat('style.min.css'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(header(Copyright))
    .pipe(gulp.dest(BASE_DESTINATION_CSS_DIR));
});


gulp.task('build-base', gulp.series(
  'build-base-js',
  'build-base-scss'
));


gulp.task('watch-base', () => {
  gulp.watch(BASE_JS_ENTRY, gulp.series('build-base-js'));
  gulp.watch(BASE_SCSS_ENTRY, gulp.series('build-base-scss'));
});
