const gulp = require('gulp');
const HubRegistry = require('gulp-hub');

let hub = new HubRegistry(['./gulp/tasks/*.js']);
gulp.registry(hub);


const BUILD_LIST = [
  'build-base',
  'build-account'
];

const WATCH_LIST = [
  'watch-base',
  'watch-account'
];


let buildSeries = gulp.series.apply(gulp, BUILD_LIST);
gulp.task('build', buildSeries);

gulp.task('watch-copyright', () => {
  gulp.watch('Copyright', buildSeries);
});

let completeWatchList = WATCH_LIST.concat(['watch-copyright']);
let watchParallel = gulp.parallel.apply(gulp, completeWatchList);
gulp.task('watch', watchParallel);

let startSeries = gulp.series(buildSeries, watchParallel);
gulp.task('start', startSeries);
