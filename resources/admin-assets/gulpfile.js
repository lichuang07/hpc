var gulp = require('gulp');
var admin_src = 'node_modules/admin-lte/**';
var admin_src_dest = "../../public/admin/";
 
// 拷贝任何需要的文件
gulp.task("copyfiles", function() {
    gulp.src(admin_src)
        .pipe(gulp.dest(admin_src_dest));
});
