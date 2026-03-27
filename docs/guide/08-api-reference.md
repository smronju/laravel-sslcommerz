# 08 API Reference

Comprehensive list of all available methods and their signatures for the `Sslcommerz` facade.

## Core Payment Chain

### `minimalPayment()`
Only `setOrder` and `setCustomer` are required for a minimal initiation.

```php
$response = Sslcommerz::setOrder($amount, $invoiceId, 'Premium Plan')
    ->setCustomer($user->name, $user->email)
    ->makePayment();

if ($response->success()) {
    return redirect($response->gatewayPageURL());
}

// Handle failure
Log::error($response->failedReason());
```

### `fullPaymentChain()`
Every method returns `SslcommerzClient` for chaining.

```php
$response = Sslcommerz::setOrder($amount, $invoiceId, 'Headphones', 'Electronics')
    ->setCustomer($user->name, $user->email, '01700000000', '123 Road', 'Dhaka', 'Dhaka', '1216')
    ->setShippingInfo(2, '456 Ave', $user->name, 'Dhaka')
    ->setGateways(['visa', 'mastercard', 'bkash'])
    ->setProductProfile('physical-goods')
    ->makePayment([
        'value_a' => $order->id,    // passes through to SSLCommerz
        'value_b' => 'customer_ref' // custom metadata
    ]);
```

## Method Signatures

### `setOrder(int|float $amount, string $invoiceId, string $productName, string $productCategory = ' '): SslcommerzClient`
Sets the basic order information.

### `setCustomer(string $name, string $email, string $phone = ' ', string $address = ' ', string $city = ' ', string $state = ' ', string $postal = ' ', string $country = 'Bangladesh', ?string $fax = null): SslcommerzClient`
Sets the customer's contact and billing information.

### `setShippingInfo(int $quantity, string $address, ?string $name = null, ?string $city = null, ?string $state = null, ?string $postal = null, ?string $country = null): SslcommerzClient`
Sets the shipping details.

### `makePayment(array $additionalData = []): PaymentResponse`
Initiates the gateway request. The array passed is merged into the payload.

### `validatePayment(array $payload, string $transactionId, int|float $amount, string $currency = 'BDT'): bool`
Validates a transaction response with the SSLCommerz server.

### `verifyHash(array $data): bool`
Verifies the signature hash received in your callbacks.

### `refundPayment(string $bankTransactionId, int|float $amount, string $reason): RefundResponse`
Initiates a refund request.

### `checkRefundStatus(string $refundRefId): RefundStatus`
Checks the status of a previously initiated refund.
