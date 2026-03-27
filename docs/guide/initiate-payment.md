# Initiate Payment

With the configuration ready, you can start making payments using our fluent API.

## Starting a Payment
In your controller, use the `Sslcommerz` facade to prepare and trigger the payment.

```php
use Smronju\Sslcommerz\Facades\Sslcommerz;

$response = Sslcommerz::setOrder(1000, 'INV123', 'My Order')
    ->setCustomer('John Doe', 'john@example.com', '0123456789')
    ->makePayment();

if ($response->success()) {
    return redirect($response->gatewayPageURL());
}

// Handle error
$failedReason = $response->failedReason();
return back()->with('error', "Payment Initiation Failed: " . $failedReason);
```

## Available Order Information
You can set more order information if needed:

```php
Sslcommerz::setOrder(1000, 'INV123', 'My Order', 'Category')
    ->setCustomer('John Doe', 'john@example.com', '0123456789', 'Address', 'City', 'State', 'Postal Code', 'Country')
    ->setShippingInfo(1, 'Address', 'Recipient Name', 'City', 'State', 'Postal Code', 'Country')
    ->makePayment();
```

## Gateways Filter
You can limit the available gateways on the SSLCommerz page:

```php
Sslcommerz::setGateways(['bkash', 'nagad', 'dbbl_nexus'])
    ->setOrder(...)
    ->makePayment();
```
