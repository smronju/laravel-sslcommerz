# 06 Complete Controller

A full example of how you can structure your payment logic within a single controller.

```php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Smronju\Sslcommerz\Facades\Sslcommerz;

class SslcommerzController extends Controller
{
    /**
     * Initiate a payment
     */
    public function index(Request $request)
    {
        $amount = 1000;
        $invoiceId = 'INV-' . uniqid();
        $productName = 'Product Name';

        $response = Sslcommerz::setOrder($amount, $invoiceId, $productName)
            ->setCustomer('John Doe', 'john@example.com', '01700000000')
            ->makePayment(['value_a' => $request->user()->id]);

        if ($response->success()) {
            return redirect($response->gatewayPageURL());
        }

        return back()->with('error', $response->failedReason());
    }

    /**
     * Handle success callback
     */
    public function success(Request $request)
    {
        $tranId = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        // Verify the payment
        $isValid = Sslcommerz::validatePayment($request->all(), $tranId, $amount, $currency);

        if ($isValid) {
            Order::where('transaction_id', $tranId)->update(['status' => 'paid']);
            return view('payment-success');
        }

        return redirect()->route('home')->with('error', 'Payment validation failed.');
    }

    /**
     * Handle failure, cancel, and IPN
     */
    public function failure(Request $request)
    {
        return view('payment-failed');
    }

    public function cancel(Request $request)
    {
        return view('payment-cancelled');
    }

    public function ipn(Request $request)
    {
        $isValid = Sslcommerz::verifyHash($request->all());

        if ($isValid) {
            // Further process with validatePayment() if needed
        }

        return response()->json(['status' => 'received']);
    }
}
```
