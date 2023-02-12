const gulp = require('gulp');

const { watch, parallel, dest, src } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify-es').default;
const imagemin = require('gulp-imagemin');
const changed = require('gulp-changed');

// JS
function scripts() {
    return src('./assets/js/src/*.js')
        .pipe(changed('./assets/js/dist'))
        .pipe(concat('scripts.js'))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify().on('error', console.error))
        .pipe(dest('./assets/js/dist'))
}

// CSS
function sassToCSS() {
    return src('./assets/sass/style.scss')
        .pipe(changed('./assets/css'))
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({ cascade: false }))
        .pipe(cleanCSS())
        .pipe(rename('style.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('./'))
}

// IMG Optimize
function imgoptimize() {
    return src('./assets/img/src/*')
        .pipe(changed('./assets/img/dist'))
        .pipe(imagemin())
        .pipe(dest('./assets/img/dist'));
}

// File Watcher
function fileWatcher() {
    watch('./assets/sass/**/*.scss', sassToCSS);
    watch('./assets/js/src/*.js', scripts);
    watch('./assets/img/src/*', imgoptimize);
}

exports.watch = parallel(fileWatcher);
exports.default = parallel(scripts, sassToCSS, imgoptimize);
