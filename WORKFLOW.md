<h1 align="center">FreznoShop Workflow</h1>

## What we've done so far...

#### New installation of Laravel
Via the Laravel Installer:

```
Laravel new freznoshop
```

Or using Composer:

```composer create-project --prefer-dist laravel/laravel freznoshop```

#### Preset Vue.js environment
and get rid of unnessessary preinstalled components:

```php artisan preset vue```

### Create assets directory
Create `resources/assets` directory (pre Laravel 5.7 style) for css and js files.

### Modify js/bootstrap.js
and get rid of unnessessary preinstalled components.

### Modify package.json file
and get rid of unnessessary preinstalled components.

### NPM installation
```npm install && npm run dev```

### Add basic authentication
```php artisan make:auth```

### Install TailwindCss
[TailwindCss](https://tailwindcss.com/docs/installation)

### Create a Tailwind config file
```./node_modules/.bin/tailwind init tailwind.js```

### Install Spaties PurgeCss _locally_
[PurgeCss](https://github.com/spatie/laravel-mix-purgecss)

### Modify webpack.mix.json
set path for css and js and add TailwindCss and PurgeCss.

### Add Laravel Telescope _locally_
[Laravel Telescope](https://laravel.com/docs/5.7/telescope)


So that's what we've done so far to get started.

Now that everything is set up, let's rock 'n' roll.
