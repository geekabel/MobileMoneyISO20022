<?php
namespace Godwin\MobileMoneyISO20022\Security;



class TokenValidator
{
    /**
     * API Key for token validation.
     *
     * @var string
     */
    private $apiKey;

    /**
     * TokenValidator constructor.
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Validate the incoming API token and verify the message integrity.
     *
     * @param string $token
     * @param string $message
     *
     * @return bool
     */
    public function validateToken(string $token, string $message): bool
    {
        $isValid  = true;
        // Implement the validation process
        // This might involve decoding the token, verifying its authenticity, and checking the message integrity

        // Example: $isValid = ($token === hash_hmac('sha256', $message, $this->apiKey));

        return $isValid;
    }
}