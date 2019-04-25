var gulp = require('gulp');
var livereload = require('gulp-livereload');


gulp.task('default',function () {
    livereload.listen();
    gulp.watch(["./public/**/*.*",'./app/**/*.*','./resources/**/*.*'],function (file) {
        console.log(file);
        gulp.src(file.path).pipe(livereload())
    });
});
