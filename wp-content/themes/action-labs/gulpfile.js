var gulp = require("gulp");
var sass = require('gulp-sass')(require('sass'));
var notify = require("gulp-notify");
const browsersync = require("browser-sync").create();
var htmlmin = require('gulp-htmlmin');
var SRChtml = './source/php/**/*.php';

// BrowserSync
function browserSync(done) {
  browsersync.init({
    proxy: 'localhost/action-labs',
		notify: false
  });
  // done();
}

// BrowserSync reload
function browserSyncReload(done) {
  browsersync.reload();
  // done();
}

gulp.task('css-task' , function(){
	return gulp.src('./source/sass/*.scss')
		.pipe(sass({outputStyle:'compressed'}))
		.on('error', notify.onError({ title: 'Tem código no seu erro, presta atenção!', message: '<%= error.message %>'}))
		.pipe(gulp.dest('./dist/css'))
		// .pipe(browserSync.stream());
});

gulp.task('move-fonts', function(){
	return gulp.src('./source/fonts/**')
		.pipe(gulp.dest('./dist/fonts'));
});

gulp.task('move-images', function(){
	return gulp.src('./source/img/**')
		.pipe(gulp.dest('./dist/img'));
});

gulp.task('js-task' , function(){
	return gulp.src('./source/js/*.js')
		.pipe(gulp.dest('./dist/js'));
});

// Minify Html:
gulp.task('minify-html', function() {
  return gulp.src(SRChtml)
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('./'));
});

gulp.task('watch-task', function(){
	gulp.watch('./source/sass/*.scss', gulp.parallel('css-task')).on('change', browserSyncReload);
	gulp.watch('./source/fonts/**', gulp.parallel('move-fonts'));
	gulp.watch('./source/img/**', gulp.parallel('move-images'));
	gulp.watch('./source/js/**/*.js', gulp.parallel('js-task'));
	gulp.watch(SRChtml,  gulp.parallel('minify-html')).on('change', browserSyncReload);
});

gulp.task('build', gulp.parallel('css-task','js-task','move-fonts','move-images','minify-html'));

gulp.task('watch', gulp.parallel('watch-task', 'css-task', browserSync));

gulp.task('default', gulp.parallel('build'));