# Refunds

SSLCommerz supports full or partial refunds for your payments. You can use the `refundPayment` method to initiate a refund.

## Initiate a Refund
To initiate a refund, use the `refundPayment` method:

```php
use Smronju\Sslcommerz\Facades\Sslcommerz;

$refund = Sslcommerz::refundPayment($bankTranId, $amount, 'Reason for refund');

if ($refund->success()) {
    // Refund initiated!
    $refundRefId = $refund->refundRefId();
    // Capture and save to your database
}

// Handle refund failure
$failedReason = $refund->failedReason();
return back()->with('error', "Refund Request Failed: " . $failedReason);
```

## Check Refund Status
To check the status of a specific refund:

```php
$status = Sslcommerz::checkRefundStatus($refundRefId);

if ($status->success()) {
    // Refund complete!
    $refundedAt = $status->refundedAt();
}
```
