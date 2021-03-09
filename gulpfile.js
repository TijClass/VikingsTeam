const gulp = require("gulp");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");
const autoprefixer = require("gulp-autoprefixer");
const postcss = require("gulp-postcss");
const tailwindcss = require("tailwindcss");
const cleanCSS = require("gulp-clean-css");
const stripCssComments = require('gulp-strip-css-comments');

// Copy All php files
gulp.task("php", function () {
  return new Promise(function (resolve, reject) {
    gulp.src("./src/components/*.php").pipe(gulp.dest("public/components"));
    gulp.src("./src/pages/*.php").pipe(gulp.dest("public/pages"));
    gulp.src("./src/*.php").pipe(gulp.dest("public"));
    resolve();
  });
});


// TODO: i need to install 
// Optimize Images

// convert tailwindcss to normal css, autoprefix it, clean it
gulp.task("tailwindcss", function () {
  return new Promise(function (resolve, reject) {
    gulp
      .src("./src/styles/*.css")
      .pipe(postcss([tailwindcss("./tailwind.config.js")]))
      .pipe(autoprefixer())
      .pipe(concat("main.css"))
      .pipe(stripCssComments())
      .pipe(cleanCSS({ compatibility: "ie8" }))
      .pipe(gulp.dest("./public/styles/"));
    resolve();
  });
});

// uglify js scripts
gulp.task("scripts", function () {
  return new Promise(function (resolve, reject) {
    gulp
      .src("./src/assets/js/*.js")
      .pipe(concat("main.js"))
      .pipe(uglify())
      .pipe(gulp.dest("./public/assets/js"));
    resolve();
  });
});

gulp.task("watch", function () {
  return new Promise(function (resolve, reject) {
    gulp.watch("./src/styles/*.css"), gulp.series("tailwindcss");
    gulp.watch("./src/assets/js/*.js", gulp.series("scripts"));
    gulp.watch("./src/components/*.php", gulp.series("php"));
    gulp.watch("./src/pages/*.php", gulp.series("php"));
    gulp.watch("./src/*.php", gulp.series("php"));
    resolve();
  });
});
