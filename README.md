<p align="center">
    <img src="/art/banner.png" alt="Sslcommerz Laravel Package" width="100%">
</p>

# SSLCommerz Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smronju/laravel-sslcommerz.svg?style=flat-square)](https://packagist.org/packages/smronju/laravel-sslcommerz)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/smronju/laravel-sslcommerz/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/smronju/laravel-sslcommerz/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/smronju/laravel-sslcommerz.svg?style=flat-square)](https://packagist.org/packages/smronju/laravel-sslcommerz)
[![License](https://img.shields.io/github/license/smronju/laravel-sslcommerz?style=flat-square)](https://github.com/smronju/laravel-sslcommerz/blob/main/LICENSE.md)

Integrate **SSLCommerz** into your Laravel application in minutes. This package provides a clean, fluent API to handle payments, validations, and refunds with zero hassle.

---

## 🚀 Quick Start in 3 Steps

### 1. Install via Composer
```bash
composer require smronju/laravel-sslcommerz
```

### 2. Configure Your Environment
Add your credentials to your `.env` file:
```env
SSLCOMMERZ_STORE_ID=your_id
SSLCOMMERZ_STORE_PASSWORD=your_password
SSLCOMMERZ_STORE_CURRENCY=BDT # Optional (default: BDT)
SSLCOMMERZ_SANDBOX=true # Set false for production (default: true)
```

### 3. Initialize & Publish (Optional)
This will publish the configuration file to `config/sslcommerz.php`:
```bash
php artisan laravel-sslcommerz:install
```

---

## 💡 Simple Usage

### 💳 Initiate a Payment
The package uses a fluent interface to prepare and trigger the payment.

```php
use Smronju\Sslcommerz\Facades\Sslcommerz;

$response = Sslcommerz::setOrder($amount, $invoiceId, $productName)
    ->setCustomer($name, $email, $phone)
    ->makePayment();

if ($response->success()) {
    return redirect($response->gatewayPageURL());
}
```

### ✅ Validate Payment
Simply pass the request data and expected transaction details.

```php
$isValid = Sslcommerz::validatePayment($request->all(), $transactionId, $amount);

if ($isValid) {
    // Save to database, update status, etc.
}
```

---

## 🛠 Advanced Features

### Handling Callbacks
Define your routes in `routes/web.php`:
```php
Route::post('/sslcommerz/success', [SslcommerzController::class, 'success'])->name('sslcommerz.success');
Route::post('/sslcommerz/failure', [SslcommerzController::class, 'failure'])->name('sslcommerz.failure');
```

### Refunds & Status Checks
```php
// Request a refund
$refund = Sslcommerz::refundPayment($bankTranId, $amount, "Customer requested refund");

// Check refund status
$status = Sslcommerz::checkRefundStatus($refundRefId);
```

---

## 🔥 Features at a Glance
- ✅ **PHP 8.2+** & **Laravel 12-13** support.
- 🛠 **Fluent API**: Ready-to-use methods for customer info, shipping info, etc.
- 🔒 **Secure**: In-built hash verification and data validation.
- 📦 **Zero Config**: Works out of the box with sensible defaults.
- 🧪 **Sandbox Ready**: Easy toggle between sandbox and live environments.

---

## 📖 Documentation
For detailed guides on dynamic parameters, IPN handling, and advanced configurations, visit the [Documentation Wiki](https://github.com/smronju/laravel-sslcommerz/wiki).

## Credits
- [Mohammad Shoriful Islam Ronju](https://github.com/smronju)
- [All Contributors](../../contributors)

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
