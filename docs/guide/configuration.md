# Configuration

Once you've published the configuration file, you can set your environment variables to set up your SSLCommerz credentials.

## Environment Variables
Add your SSLCommerz credentials to your `.env` file:

```env
# SSLCommerz Configuration
SSLCOMMERZ_STORE_ID=your_store_id
SSLCOMMERZ_STORE_PASSWORD=your_store_password
SSLCOMMERZ_STORE_CURRENCY=BDT
SSLCOMMERZ_SANDBOX=true
```

## Obtaining Sandbox Credentials
If you're testing, you can obtain sandbox credentials from the [SSLCommerz Developer Portal](https://developer.sslcommerz.com/registration/).

## 3. Configuration Overrides
You can customize the available routes and product profiles directly in `config/sslcommerz.php`.

```php
return [
    'sandbox' => env('SSLCOMMERZ_SANDBOX', true),
    'store' => [
        'id' => env('SSLCOMMERZ_STORE_ID'),
        'password' => env('SSLCOMMERZ_STORE_PASSWORD'),
        'currency' => env('SSLCOMMERZ_STORE_CURRENCY', 'BDT'),
    ],
    'products' => [
        'profile' => 'general', // general, physical-goods, etc.
    ],
    // ...
];
```
