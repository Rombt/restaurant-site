


export const wpPlugin = () => {

    app.wpPlugins = true;
    app.isWP = true;

    // app.plugins.del(app.path.pluginsPath, { force: true });


    return app.gulp.src(app.path.src.wpPlugins)
        .pipe(app.gulp.dest(app.path.pluginsPath))
}