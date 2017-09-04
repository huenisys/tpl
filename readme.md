# huenisys/tpl

## Installation

- $ ``composer require "huenisys/tpl"``
- For development, use autoload-dev instead
```
"autoload-dev": {
    "psr-4": {
        "Tests\\": "tests/",
        "Huenisys\\Tpl\\": "../laravel-packages/huenisys/tpl/src"
    }
},
```
- add provider: ``Huenisys\Tpl\TplServiceProvider::class,``
- add alias ``'Tpl' => Huenisys\Tpl\Facades\Tpl::class,``
- replace guest middleware (app/Http/Kernel.php): ``'guest' => \Huenisys\Tpl\Http\Middleware\RedirectIfAuthenticated::class``

## Steps

- remove Laravel's default root route / in routes/web.php
- publish assets: ``art vendor:publish --tag=tpl-assets --force``
- generate public files using Laravel Mix as described below
- update your mailer config

## Laravel Mix Steps

- require-dev bootstrap and popper for BS4 in your package.json
```
"bootstrap": "^4.0.0-beta",
"popper.js": "^1.11.0"
```
- $ ``npm install bootstrap popper.js``
- add below code in your webpack.mix.js file after commenting out the default
```js
// huenisys/tpl
mix.autoload({
        jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"],
        'popper.js/dist/umd/popper.js': ['Popper']
    })
    .js(['resources/tpl/assets/js/app-tpl.js'], 'public/js')
   .sass('resources/tpl/assets/sass/app-tpl.scss', 'public/css')
   .copyDirectory('resources/tpl/assets/font-awesome-4.7.0/fonts', 'public/fonts')
   .sass('resources/tpl/assets/font-awesome-4.7.0/scss/font-awesome.scss', 'public/css')
   .copy('resources/tpl/assets/favicon.ico', 'public/favicon.ico')
   .copy('resources/tpl/assets/robots.txt', 'public/robots.txt')
   .copy('resources/tpl/assets/.htaccess', 'public/.htaccess')
   .extract(['jquery','popper.js', 'bootstrap', 'vue'])
   .sourceMaps()
   .version();
```
- replace favicon.ico with your own
- replace robots.txt as desired. default: seo is off
- $ ``npm run dev`` or $ ``npm run prod``

## Home Route

- add Route::get('/', '\Huenisys\Tpl\Http\Controllers\TplPageController@getWelcome');