# 05 Payment Flow

The general flow of integrating SSLCommerz with this package.

## Step 1: Initiate Payment
Start by preparing the order and customer data.

```php
use Smronju\Sslcommerz\Facades\Sslcommerz;

$response = Sslcommerz::setOrder($amount, $invoiceId, 'Premium Course')
    ->setCustomer($name, $email, $phone)
    ->makePayment();

if ($response->success()) {
    return redirect($response->gatewayPageURL());
}

// Log error
Log::error($response->failedReason());
```

## Step 2: Handle Redirection
When the customer is redirected to your success route, you should validate the payment.

```php
$transactionId = $request->input('tran_id');
$amount = $request->input('amount');
$currency = $request->input('currency');

$isValid = Sslcommerz::validatePayment($request->all(), $transactionId, $amount, $currency);

if ($isValid) {
    // Record success in your database
}
```

## Step 3: Verify Signatures
Even without the validatePayment call, you can verify if a response comes from SSLCommerz.

```php
$isAuthenticResponse = Sslcommerz::verifyHash($request->all());

if ($isAuthenticResponse) {
    // Proceed with trust
}
```
