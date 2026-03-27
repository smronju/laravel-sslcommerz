# 04 Routes

Define the callback routes in your `routes/web.php` or `routes/api.php` so that SSLCommerz can redirect back to your application.

```php
use App\Http\Controllers\SslcommerzController;
use Illuminate\Support\Facades\Route;

Route::post('/sslcommerz/success', [SslcommerzController::class, 'success'])->name('sslcommerz.success');
Route::post('/sslcommerz/failure', [SslcommerzController::class, 'failure'])->name('sslcommerz.failure');
Route::post('/sslcommerz/cancel', [SslcommerzController::class, 'cancel'])->name('sslcommerz.cancel');
Route::post('/sslcommerz/ipn', [SslcommerzController::class, 'ipn'])->name('sslcommerz.ipn');
```

## IPN Handling
IPN (Instant Payment Notification) is sent directly from SSLCommerz servers to your application. It acts as a final validation for your payment status.

### IPN Controller Example
```php
use App\Http\Controllers\SslcommerzController;
use Smronju\Sslcommerz\Facades\Sslcommerz;

public function ipn(Request $request)
{
    $isValid = Sslcommerz::verifyHash($request->all());

    if ($isValid) {
        $status = Sslcommerz::validatePayment($request->all(), $tranId, $amount, 'BDT');
        // Handle results
    }

    return response()->json(['status' => 'OK']);
}
```

## Route Customization
You can customize the route names in your `config/sslcommerz.php`.
