// const { task } = require("gulp");
// const { task } = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function sassTask() {
  return gulp
    .src("assets/src/scss/*.scss")
    .pipe(sass())
    .pipe(gulp.dest("assets/css"))
}
exports.sass = sassTask;

