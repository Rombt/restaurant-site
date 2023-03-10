import replace from "gulp-replace"; // поиск и замена по регуляракам
import plumber from "gulp-plumber"; // оброботка ошибок
import notify from "gulp-notify"; // вывод соообщений об ошибках в windows!
import browsersync from "browser-sync";
import newer from "gulp-newer";
import ifPugin from "gulp-if";

import * as nodePath from 'path';


export const plugins = {
    replace: replace,
    plumber: plumber,
    notify: notify,
    browsersync: browsersync,
    newer: newer,
    if: ifPugin,
}