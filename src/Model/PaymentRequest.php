<?php 

namespace Godwin\MobileMoneyISO20022\Model;

class PaymentRequest
{
    /**
     * Amount of the payment.
     *
     * @var float
     */
    private $amount;

    /**
     * Payer information.
     *
     * @var array
     */
    private $payer;

    /**
     * Payee information.
     *
     * @var array
     */
    private $payee;

    /**
     * Additional payment details.
     *
     * @var array
     */
    private $additionalDetails;

    /**
     * PaymentRequest constructor.
     *
     * @param float $amount
     * @param array $payer
     * @param array $payee
     * @param array $additionalDetails
     */
    public function __construct(float $amount, array $payer, array $payee, array $additionalDetails = [])
    {
        $this->amount = $amount;
        $this->payer = $payer;
        $this->payee = $payee;
        $this->additionalDetails = $additionalDetails;
    }

    /**
     * Get the amount of the payment.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Get payer information.
     *
     * @return array
     */
    public function getPayer(): array
    {
        return $this->payer;
    }

    /**
     * Get payee information.
     *
     * @return array
     */
    public function getPayee(): array
    {
        return $this->payee;
    }

    /**
     * Get additional payment details.
     *
     * @return array
     */
    public function getAdditionalDetails(): array
    {
        return $this->additionalDetails;
    }

    /**
     * Convert the PaymentRequest to an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'amount' => $this->amount,
            'payer' => $this->payer,
            'payee' => $this->payee,
            'additionalDetails' => $this->additionalDetails,
        ];
    }

    /**
     * Create a PaymentRequest from an array.
     *
     * @param array $data
     *
     * @return PaymentRequest
     */
    public static function fromArray(array $data): PaymentRequest
    {
        return new self(
            $data['amount'],
            $data['payer'],
            $data['payee'],
            $data['additionalDetails'] ?? []
        );
    }
}