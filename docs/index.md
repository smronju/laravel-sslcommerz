---
layout: home

hero:
  name: SSLCommerz Laravel
  text: Seamless Payment Integration
  tagline: The most reliable and developer-friendly Laravel package for SSLCommerz.
  image:
    src: /banner.png
    alt: SSLCommerz Laravel
  actions:
    - theme: brand
      text: Get Started
      link: /guide/installation
    - theme: alt
      text: View on GitHub
      link: https://github.com/smronju/laravel-sslcommerz

features:
  - icon: 🚀
    title: Fast Setup
    details: Integrate SSLCommerz in under 5 minutes with our fluent API and zero-hassle config.
  - icon: 🔒
    title: Secure & Reliable
    details: Built-in hash validation and secure communication paths for production-ready payments.
  - icon: ⚡️
    title: Laravel Native
    details: Supports Laravel 12 & 13 out of the box with Service Providers and Facade support.
---

## Why Choose This Package?

Integrating payment gateways shouldn't be a painful process. **SSLCommerz Laravel** is designed with developer experience in mind, providing a clean syntax that handles all the heavy lifting for you.

```php
use Smronju\Sslcommerz\Facades\Sslcommerz;

$response = Sslcommerz::setOrder($amount, $invoice, 'Course Enrollment')
    ->setCustomer($name, $email, $phone)
    ->makePayment();

if ($response->success()) {
    return redirect($response->gatewayPageURL());
}
```
