# 02 Installation

To get started, you can install the package via Composer.

```bash
composer require smronju/laravel-sslcommerz
```

## 1. Registering Discovery (Optional)
This package uses Laravel's auto-discovery by default. However, if you've disabled it or are on a manual setup, you can add it to your `config/app.php`:

```php
'providers' => [
    Smronju\Sslcommerz\SslcommerzServiceProvider::class,
],

'aliases' => [
    'Sslcommerz' => Smronju\Sslcommerz\Facades\Sslcommerz::class,
],
```

## 2. Publish Configuration
Publish the config file to your application's `config/` directory by running the install command:

```bash
php artisan laravel-sslcommerz:install
```

This will create a `config/sslcommerz.php` file, which you can use to customize the package's behavior.
