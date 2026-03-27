# Validate Payment

After the customer completes the payment, SSLCommerz redirects the customer back to your application. At that point, you should validate the payment using the `Sslcommerz` facade.

## Handling the Redirection
For the success callback, you can use the `validatePayment` method and check if it's successful.

```php
use Illuminate\Http\Request;
use Smronju\Sslcommerz\Facades\Sslcommerz;

public function success(Request $request)
{
    $transactionId = $request->input('tran_id');
    $amount = $request->input('amount');
    $currency = $request->input('currency');

    // Manually pass the invoice details you have on record
    $isValid = Sslcommerz::validatePayment($request->all(), $transactionId, $amount, $currency);

    if ($isValid) {
        // Save the transaction to your database, handle success
        return view('payment-success');
    }

    // Handle invalid status
    return view('payment-failure');
}
```

## Verify Hash
You can also manually verify the hash from the SSLCommerz response if you wish:

```php
$isAuthenticResponse = Sslcommerz::verifyHash($request->all());

if ($isAuthenticResponse) {
    // Proceed with trust
}
```
