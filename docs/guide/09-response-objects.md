# 09 Response Objects

The package returns typed response objects instead of raw arrays. Each object provides semantic methods for inspecting results easily.

## `PaymentResponse`
Returns after `makePayment()`.

```php
$status = $response->status();           // 'success', 'failed'
$success = $response->success();         // bool
$failedReason = $response->failedReason();
$sessionKey = $response->sessionKey();
$gatewayPageURL = $response->gatewayPageURL();
$gatewayList = $response->gatewayList(); // array of gateways
$toArray = $response->toArray();         // raw data
```

## `RefundResponse`
Returns after `refundPayment()`.

```php
$status = $response->status();           // 'success', 'failed'
$success = $response->success();         // bool
$failedReason = $response->failedReason();
$refundRefId = $response->refundRefId();
$bankTranId = $response->bankTranId();
$transId = $response->transId();
$toArray = $response->toArray();         // raw data
```

## `RefundStatus`
Returns after `checkRefundStatus()`.

```php
$status = $response->status();    // 'refunded', 'processing', 'cancelled'
$success = $response->success();  // bool
$reason = $response->reason();
$initiatedAt = $response->initiatedAt();
$refundedAt = $response->refundedAt();
$bankTranId = $response->bankTranId();
$transId = $response->transId();
$refundRefId = $response->refundRefId();
$toArray = $response->toArray();  // raw data
```
