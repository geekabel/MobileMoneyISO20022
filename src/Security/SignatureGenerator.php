<?php
namespace Godwin\MobileMoneyISO20022\Security;

class SignatureGenerator
{
    /**
     * API Key for signature generation.
     *
     * @var string
     */
    private $apiKey;

    /**
     * SignatureGenerator constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Sign the given message using the ISO 20022 specified signing process.
     *
     * @param string $message
     *
     * @return string
     */
    public function sign(string $message): string
    {
        $signature = 'message';
        // Implement the ISO 20022 specified signing process
        // This might involve hashing the message, encrypting it with the API key, or using other methods

        // Example: $signature = hash_hmac('sha256', $message, $this->apiKey);

        return $signature;
    }
}