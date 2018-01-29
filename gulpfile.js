const gulp = require('gulp');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const minify = require('gulp-uglify');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
// const header = require('gulp-header');
const sass = require('gulp-sass');
const zip = require('gulp-zip');


const SRC_DIR = 'src';
const THEME_DIR = 'theme';
const THEME_ASSETS_DIR = `${THEME_DIR}/assets`;
const BUILD_DIR = 'build';

const SRC_JS_ENTRY = `${SRC_DIR}/js/**/*.js`;
const SRC_SCSS_ENTRY = [
  `${SRC_DIR}/scss/variables.scss`,
  `${SRC_DIR}/scss/functions.scss`,
  `${SRC_DIR}/scss/fonts.scss`,
  `${SRC_DIR}/scss/main.scss`,
  `${SRC_DIR}/scss/styles/*.scss`,
  `${SRC_DIR}/scss/media/*.scss`
];

const JS_OUTPUT_DEST = `${THEME_ASSETS_DIR}/js`;
const CSS_OUTPUT_DEST = `${THEME_ASSETS_DIR}/css`;


gulp.task('build-js', () => {
  return gulp.src(SRC_JS_ENTRY)
    .pipe(babel({ presets: ['env'] }))
    .pipe(concat('script.js'))
    .pipe(gulp.dest(JS_OUTPUT_DEST))
    .pipe(minify({ compress: true }))
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest(JS_OUTPUT_DEST));
});

gulp.task('build-css', () => {
  return gulp.src(SRC_SCSS_ENTRY)
    .pipe(concat('style.css'))
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(CSS_OUTPUT_DEST))
    .pipe(cleanCSS())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest(CSS_OUTPUT_DEST));
});

gulp.task('zip-all', () => {
  return gulp.src(`${THEME_DIR}/**/*`)
    .pipe(zip('opencharity.zip'))
    .pipe(gulp.dest(BUILD_DIR));
});

const jsSeries = gulp.series('build-js');
const cssSeries = gulp.series('build-css');
const buildSeries = gulp.series(jsSeries, cssSeries);

gulp.task('watch', () => {
  gulp.watch(SRC_JS_ENTRY, jsSeries);
  gulp.watch(SRC_SCSS_ENTRY, cssSeries);
});

gulp.task('start', gulp.series(buildSeries, 'watch'));
gulp.task('build', gulp.series(buildSeries, 'zip-all'));
