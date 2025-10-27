# Package Laravel-Multiselect

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a quick interface for adding select boxes from which multiple elements may be selected.
The interface is similar to the Laravel Collective [HTML](https://github.com/LaravelCollective/html/) package,
and aims to be compatible with it. However, you can use this library without Laravel Collective's HTML.

This package adheres to [PSR 1, 2 and 4](http://www.php-fig.org/psr/).


## Requirements

- [PHP >= 8.2](http://php.net)
- [Laravel ^11 || ^12](https://github.com/laravel/framework)
- [jQuery > 2.0?](http://jquery.com)


## Fork / Maintainer

This repository is a fork maintained by Beto Vicentini. It is based on the original work by Andre Chalom.
Original repo: https://github.com/andrechalom/laravel-multiselect

This repository is maintained on GitHub only (https://github.com/betovicentini/laravel-multiselect) and is not published to Packagist.

If you want to require this fork in your Laravel application, add a VCS repository entry to your project's composer.json:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/betovicentini/laravel-multiselect"
    }
  ]
}
```

Then require the package:

```bash
composer require betovicentini/laravel-multiselect:dev-main
```

### Service Provider & Facade

Register provider and facade on your config/app.php file. This is necessary for older Laravel versions; for Laravel >= 5.5 package auto-discovery should handle it.

```php
'providers' => [
    ...,
    AndreChalom\LaravelMultiselect\MultiselectServiceProvider::class,
],

'aliases' => [
    ...,
    'Multiselect' => AndreChalom\LaravelMultiselect\MultiselectFacade::class,
]
```


## Vite (Laravel) integration

If your Laravel app uses Vite, you can bundle or import the package assets directly from vendor. Two simple approaches:

1) Import package files in your resources/js/app.js so Vite bundles them:

```js
// resources/js/app.js (in your application)
// import the package JS and CSS from vendor so Vite bundles them
// Import custom multiselect JavaScript
import '/vendor/betovicentini/laravel-multiselect/resources/assets/js/multiselect.js';
import '/vendor/betovicentini/laravel-multiselect/resources/assets/css/multiselect.css';
```

Then use @vite as usual in your layouts:

```blade
@vite(['resources/js/app.js', 'resources/css/app.css'])
```

## Credits

The idea behind the Multiselect is based on an article by [Michał Wojciechowski](http://odyniec.net/articles/multiple-select-fields/). This library reuses some code from Laravel Collective [HTML](https://github.com/LaravelCollective/html/). Fork maintained by Beto Vicentini. Original author: Andre Chalom <andrechalom@gmail.com>.

[ico-version]: https://img.shields.io/packagist/v/betovicentini/laravel-multiselect.svg
[ico-license]: https://img.shields.io/badge/license-GPLv3-brightgreen.svg
[ico-downloads]: https://img.shields.io/packagist/dt/betovicentini/laravel-multiselect.svg

[link-packagist]: https://packagist.org/packages/betovicentini/laravel-multiselect
[link-downloads]: https://packagist.org/packages/betovicentini/laravel-multiselect
