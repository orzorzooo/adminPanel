const mix = require("laravel-mix");
require("laravel-mix-jigsaw");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

mix
  .jigsaw()
  .js("source/_assets/js/main.js", "js")
  .js("source/_assets/js/admin.js", "js")
  .sass("source/_assets/sass/main.scss", "css")
  .copy("source/_assets/sass/admin.css", "css")
  .options({
    processCssUrls: false,
  })
  .version();
