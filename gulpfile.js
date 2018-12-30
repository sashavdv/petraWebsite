var elixir = require('laravel-elixir');
elixir(function(mix) {
    mix.sass('app.scss');
    mix.webpack('app.js');
});
// elixir(function(mix) {
//     mix.less('clndr.less');
// });