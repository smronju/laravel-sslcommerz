# 01 Overview

**SSLCommerz Laravel** is a developer-focused package for integrating SSLCommerz payments into your Laravel applications. It provides a clean, fluent API that wraps the complexity of the SSLCommerz gateway into simple method chains and typed response objects.

## Key Features

- **Fluent API**: Chain your order, customer, and shipping details seamlessly.
- **Payload Merging**: Easily pass extra metadata (value\_a through value\_f) to track your custom identifiers.
- **Typed Responses**: Instead of raw arrays, receive `PaymentResponse`, `RefundResponse`, and `RefundStatus` objects.
- **Robust Validation**: Built-in methods for verifying hash signatures and validating transaction details with SSLCommerz servers.
- **Sandbox Ready**: Effortless switching between sandbox and live modes via your environment files.
- **Modern Support**: Fully compatible with PHP 8.2+ and Laravel 12 & 13.
