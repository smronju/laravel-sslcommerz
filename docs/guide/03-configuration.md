# 03 Configuration

Set your environment variables to set up your SSLCommerz credentials.

## Environment Variables
Add your SSLCommerz credentials to your `.env` file:

```env
# SSLCommerz Configuration
SSLCOMMERZ_SANDBOX=true
SSLCOMMERZ_STORE_ID=your_store_id
SSLCOMMERZ_STORE_PASSWORD=your_store_password
SSLCOMMERZ_STORE_CURRENCY=BDT

# Optional routes (default below)
SSLCOMMERZ_ROUTE_SUCCESS=sslcommerz.success
SSLCOMMERZ_ROUTE_FAILURE=sslcommerz.failure
SSLCOMMERZ_ROUTE_CANCEL=sslcommerz.cancel
SSLCOMMERZ_ROUTE_IPN=sslcommerz.ipn
```

## Available product profiles
SSLCommerz requires a product profile. By default, this package uses `general`. You can modify this in `config/sslcommerz.php` or using `$client->setProductProfile($profile)`.

- `general`
- `physical-goods`
- `non-physical-goods`
- `airline-tickets`
- `travel-vertical`
- `telecom-vertical`
