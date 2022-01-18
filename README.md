<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Laravel AdminLTE
```
composer create-project laravel/laravel thimphu-futsal
```

```
composer require laravel/ui
```

```
php artisan ui bootstrap --auth
```

```
npm install
```

```
npm run dev
```

```
npm install admin-lte@^3.1 --save
```

# Replace /resources/js/bootstrap.js by this
```
window._ = require('lodash');

try {
    require('bootstrap');
    require('admin-lte');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
```

```
npm run dev
```

```
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
```


```
<script src="{{ mix('js/app.js') }}"></script>
```


```
npm install --save @fortawesome/fontawesome-free
```

```
$fa-font-path:"../webfonts";
```

```
npm install vue@next vue-router@next vue-loader@next
```




