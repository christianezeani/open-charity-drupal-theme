const gulp = require('gulp');
const rename = require('gulp-rename');
const babel = require('gulp-babel');
const minify = require('gulp-uglify');
const concat = require('gulp-concat');
const header = require('gulp-header');
const sass = require('gulp-sass');
const copy = require('gulp-copy');
const zip = require('gulp-zip');


const SRC_DIR = 'src';
const THEME_DIR = 'theme';
const BUILD_DIR = 'build';

const SRC_SCSS_ENTRY = `${SRC_DIR}/scss/**/*.scss`;

const SRC_COPY_ENTRY = [
  `${SRC_DIR}/**/*`,
  `!${SRC_DIR}/scss`,
  `!${SRC_DIR}/scss/**/*`
];


gulp.task('build-css', () => {
  return gulp.src(SRC_SCSS_ENTRY)
    .pipe(sass({onError: sass.logError}))
    .pipe(concat('style.css'))
    .pipe(gulp.dest(`${THEME_DIR}/css`));
});

const buildSeries = gulp.series('build-css');

gulp.task('watch-all', () => {
  gulp.watch(SRC_SCSS_ENTRY, buildSeries);
});

gulp.task('zip-all', () => {
  return gulp.src(`${THEME_DIR}/**/*`)
    .pipe(zip('ce_opencharity.zip'))
    .pipe(gulp.dest(BUILD_DIR));
});

gulp.task('watch', gulp.series(buildSeries, 'watch-all'));
gulp.task('build', gulp.series(buildSeries, 'zip-all'));
