import gulp from "gulp";
import { path } from "./gulp/config/path.js";
import { plugins } from "./gulp/config/plugins.js";
import { reset } from "./gulp/tasks/reset.js";
// import { copy } from "./gulp/tasks/wpPlugin.js";     copy убрал за ненадобностью вместо неё wpPlugins
import { php } from "./gulp/tasks/php.js";
import { server } from "./gulp/tasks/server.js";
import { styles } from "./gulp/tasks/styles.js";
import { js } from "./gulp/tasks/js.js";
import { images } from "./gulp/tasks/images.js";
import { otfToTtf, ttfToWoff, fontStyle, copyFonts } from "./gulp/tasks/fonts.js";
import { createSvgSprite } from "./gulp/tasks/svgsprite.js";
import { zip } from "./gulp/tasks/zip.js";
import { ftp } from "./gulp/tasks/ftp.js";
import { grid } from "./gulp/tasks/grid.js";

import { listProcFiles } from "./gulp/tasks/listProcFiles.js";
import { wpPlugin } from "./gulp/tasks/wpPlugin.js";
import { resetWpPlugin } from "./gulp/tasks/reset_wpPlugin.js";

import { forTest } from "./gulp/tasks/forTest.js";

global.app = {
    wpPlugins: process.argv.includes('--plugin'),
    isWP: process.argv.includes('--wp'),
    isProd: process.argv.includes('--prod'),
    toCleanCss: process.argv.includes('--prod'),
    isDev: !process.argv.includes('--prod'),
    isValid: process.argv.includes('--valid'),  // проэкт собирается как для prod но без минификации стилей 
    isSASS: false, // false == LESS; true == SASS
    path: path,
    gulp: gulp,
    plugins: plugins,
}

function watcher() {
    // gulp.watch(path.watch.files, copy)
    gulp.watch(path.watch.php, php) // для отправки файлов по ftp при каждом обновлении добавить вместо php gulp.series(php,ftp)
    gulp.watch(path.watch.styles, styles)
    gulp.watch(path.watch.js, js)
    gulp.watch(path.watch.images, images)

    // gulp.watch(path.wp_watch, gulp.parallel(php, wpPlugin))
    gulp.watch(path.wp_watch, gulp.series(resetWpPlugin, wpPlugin))
}

const mainTasks = gulp.series(gulp.parallel(copyFonts, php, wpPlugin, styles, js, images), listProcFiles);
export const dev = gulp.series(reset, resetWpPlugin, mainTasks, gulp.parallel(watcher, server));
export const prod = gulp.series(reset, resetWpPlugin, mainTasks);

export const createFonts = gulp.series(otfToTtf, ttfToWoff, fontStyle);
export { createSvgSprite };
export { grid };
export const deployZIP = gulp.series(reset, resetWpPlugin, mainTasks, wpPlugin, zip);
export const deployFTP = gulp.series(reset, resetWpPlugin, mainTasks, ftp);





//----------------------------- черновик --------------------------------------------------
// export const tests = gulp.series(app.plugins.if(app.isWP, forTest));

// export const wpPlugins = gulp.series(app.plugins.if(app.isProd, [reset, wpPlugin, listProcFiles, zip], [reset, wpPlugin, listProcFiles]));
