var gulp = require('gulp');
var elixir = require('laravel-elixir');

//elixir.config.assetsPath = './resources';
//elixir.config.publicPath = './public';

gulp.task('watch', function(){
  gulp.watch('resources/sass/**/*.scss', ['sass']); 
  // Other watchers
})

elixir(mix => {
    mix.sass('app.scss', 'public/css/app.css');
    //mix.webpack('./assets/src/js/app.js', 'assets/js/app.js');
    //mix.scripts([
        //'./assets/src/js/utils/alert.js',
    //], 'assets/js/boysstuff.js');

});