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

const ACCOUNT_SOURCE_DIR = `${Config.SOURCE_BASE_DIR}/account`;
const ACCOUNT_SOURCE_JS_DIR = `${ACCOUNT_SOURCE_DIR}/js`;
const ACCOUNT_SOURCE_SCSS_DIR = `${ACCOUNT_SOURCE_DIR}/scss`;

const ACCOUNT_JS_ENTRY = [
  `${ACCOUNT_SOURCE_JS_DIR}/app.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/config.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/router.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/transitions.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/interceptors.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/filters/*.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/services/*.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/directives/*.js`,
  `${ACCOUNT_SOURCE_JS_DIR}/controllers/*.js`
];

const ACCOUNT_SCSS_ENTRY = [
  `${ACCOUNT_SOURCE_SCSS_DIR}/*.scss`,
  `${ACCOUNT_SOURCE_SCSS_DIR}/styles/**/*.scss`
];

const ACCOUNT_DESTINATION_DIR = `${Config.DESTINATION_BASE_DIR}/account/assets`;
const ACCOUNT_DESTINATION_JS_DIR = `${ACCOUNT_DESTINATION_DIR}/js`;
const ACCOUNT_DESTINATION_CSS_DIR = `${ACCOUNT_DESTINATION_DIR}/css`;



gulp.task('build-account-js', () => {
  return gulp.src(ACCOUNT_JS_ENTRY)
    .pipe(babel({ presets: ['env'] }))
    .pipe(concat('app.js'))
    .pipe(header(Copyright))
    .pipe(gulp.dest(ACCOUNT_DESTINATION_JS_DIR))
    .pipe(minify())
    .pipe(header(Copyright))
    .pipe(rename('app.min.js'))
    .pipe(gulp.dest(ACCOUNT_DESTINATION_JS_DIR));
});


gulp.task('build-account-scss', () => {
  return gulp.src(ACCOUNT_SCSS_ENTRY)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(concat('app.min.css'))
    .pipe(header(Copyright))
    .pipe(gulp.dest(ACCOUNT_DESTINATION_CSS_DIR));
});


gulp.task('build-account', gulp.series(
  'build-account-js',
  'build-account-scss'
));


gulp.task('watch-account', () => {
  gulp.watch(ACCOUNT_JS_ENTRY, gulp.series('build-account-js'));
  gulp.watch(ACCOUNT_SCSS_ENTRY, gulp.series('build-account-scss'));
});
