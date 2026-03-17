<?php

declare(strict_types=1);

namespace Smronju\Sslcommerz\Facades;

use Illuminate\Support\Facades\Facade;
use Smronju\Sslcommerz\SslcommerzClient;

/**
 * @method static \Smronju\Sslcommerz\SslcommerzClient setOrder(int|float $amount, string $invoiceId, string $productName, string $productCategory = ' ')
 * @method static \Smronju\Sslcommerz\SslcommerzClient setCustomer(string $name, string $email, string $phone = ' ', string $address = ' ', string $city = ' ', string $state = ' ', string $postal = ' ', string $country = 'Bangladesh', string $fax = null)
 * @method static \Smronju\Sslcommerz\SslcommerzClient setShippingInfo(int $quantity, string $address, string $name = null, string $city = null, string $state = null, string $postal = null, string $country = null)
 * @method static \Smronju\Sslcommerz\SslcommerzClient setCallbackUrls(string $successUrl, string $failedUrl, string $cancelUrl, string $ipnUrl)
 * @method static \Smronju\Sslcommerz\SslcommerzClient setGateways(array $gateways)
 * @method static \Smronju\Sslcommerz\SslcommerzClient setProductProfile(string $profile)
 * @method static \Smronju\Sslcommerz\Data\PaymentResponse makePayment(array $additionalData = [])
 * @method static bool validatePayment(array $payload, string $transactionId, int|float $amount, string $currency = 'BDT')
 * @method static bool verifyHash(array $data)
 * @method static \Smronju\Sslcommerz\Data\RefundResponse refundPayment(string $bankTransactionId, int|float $amount, string $reason)
 * @method static \Smronju\Sslcommerz\Data\RefundStatus checkRefundStatus(string $refundRefId)
 *
 * @see SslcommerzClient
 */
class Sslcommerz extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SslcommerzClient::class;
    }
}
