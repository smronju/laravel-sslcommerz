---
layout: home

hero:
  name: SSLCommerz Laravel
  text: Local Payments for Laravel Developers.
  tagline: A fluent API for initiating payments, validating transactions, handling refunds, and verifying hashes — built for sandbox and live environments.
  image:
    src: /banner.png
    alt: SSLCommerz Laravel
  actions:
    - theme: brand
      text: Get Started
      link: /guide/01-overview
    - theme: alt
      text: View on GitHub
      link: https://github.com/smronju/laravel-sslcommerz

features:
  - icon: 💳
    title: Initiate Payments
    details: Fluent chain for order, customer, shipping, callbacks, and gateway selection. Returns a typed response object.
  - icon: ✅
    title: Validate Transactions
    details: Verify hash signatures and validate payment responses before marking orders as paid. Prevents tampering.
  - icon: 🔄
    title: Refund with Confidence
    details: Initiate refunds and poll their status through dedicated response objects. Success, processing, and failure are explicit.

---

## Running in minutes.

Install the package, publish configuration, set your SSLCommerz store credentials, and define callback routes.

```bash
# Install the package
composer require smronju/laravel-sslcommerz

# Publish configuration
php artisan laravel-sslcommerz:install
```

```env
# Environment
SSLCOMMERZ_SANDBOX=true
SSLCOMMERZ_STORE_ID=your_store_id
SSLCOMMERZ_STORE_PASSWORD=your_store_password
SSLCOMMERZ_STORE_CURRENCY=BDT

# Callback routes
SSLCOMMERZ_ROUTE_SUCCESS=sslcommerz.success
SSLCOMMERZ_ROUTE_FAILURE=sslcommerz.failure
SSLCOMMERZ_ROUTE_CANCEL=sslcommerz.cancel
SSLCOMMERZ_ROUTE_IPN=sslcommerz.ipn
```

## Start accepting payments with confidence.

A focused SSLCommerz integration for Laravel teams shipping in sandbox or live mode. Minimal footprint, maximum clarity.

[Open Repository](https://github.com/smronju/laravel-sslcommerz) | [Full Documentation](/guide/01-overview)
