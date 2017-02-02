var config = {
    jsConcatFiles: [
        './dist/js/module1.js',
        './dist/js/main.js'
    ],
    buildFilesFoldersRemove:[
        'build/scss/',
        'build/js/!(*.min.js)',
        'build/bower.json',
        'build/bower_components/',
        'build/maps/'
    ]
};


// ////////////////////////////////////////////////
// Required taskes
// gulp build
// bulp build:serve
// // /////////////////////////////////////////////

var gulp = require('gulp'),
    sourcemaps = require('gulp-sourcemaps'),
    css = require('gulp-css'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    del = require('del');


// ////////////////////////////////////////////////
// Log Errors
// // /////////////////////////////////////////////

function errorlog(err){
    console.error(err.message);
    this.emit('end');
}


// ////////////////////////////////////////////////
// Scripts Tasks
// ///////////////////////////////////////////////

gulp.task('scripts', function() {
    return gulp.src(config.jsConcatFiles)
        .pipe(sourcemaps.init())
        .pipe(concat('temp.js'))
        .pipe(uglify())
        .on('error', errorlog)
        .pipe(rename('app.min.js'))
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest('./dist/js/'))

        .pipe(reload({stream:true}));
});


// ////////////////////////////////////////////////
// Styles Tasks
// ///////////////////////////////////////////////

gulp.task('styles', function() {
    gulp.src('dist/css/style.css')
        .pipe(sourcemaps.init())
        .pipe(css({outputStyle: 'compressed'}))
        .on('error', errorlog)
        .pipe(autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
        }))
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest('dist/css'))
        .pipe(reload({stream:true}));
});


// ////////////////////////////////////////////////
// HTML Tasks
// // /////////////////////////////////////////////

gulp.task('html', function(){
    gulp.src('dist/**/*.html')
        .pipe(reload({stream:true}));
});


// ////////////////////////////////////////////////
// Browser-Sync Tasks
// // /////////////////////////////////////////////

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./dist/"
        }
    });
});

// ////////////////////////////////////////////////
// Watch Tasks
// // /////////////////////////////////////////////

gulp.task ('watch', function(){
    gulp.watch('dist/scss/**/*.scss', ['styles']);
    gulp.watch('dist/js/**/*.js', ['scripts']);
    gulp.watch('dist/**/*.html', ['html']);
});

gulp.task('default', ['scripts', 'styles', 'html', 'browser-sync', 'watch']);

