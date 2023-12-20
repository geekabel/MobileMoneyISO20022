<?php
namespace Godwin\MobileMoneyISO20022\Model;


class PaymentResponse
{
    /**
     * Transaction ID of the payment.
     *
     * @var string
     */
    private $transactionId;

    /**
     * Status of the payment.
     *
     * @var string
     */
    private $status;

    /**
     * Timestamp of the payment response.
     *
     * @var \DateTimeImmutable
     */
    private $timestamp;

    /**
     * Additional response details.
     *
     * @var array
     */
    private $additionalDetails;

    /**
     * PaymentResponse constructor.
     *
     * @param string             $transactionId
     * @param string             $status
     * @param \DateTimeImmutable $timestamp
     * @param array              $additionalDetails
     */
    public function __construct(string $transactionId, string $status, \DateTimeImmutable $timestamp, array $additionalDetails = [])
    {
        $this->transactionId = $transactionId;
        $this->status = $status;
        $this->timestamp = $timestamp;
        $this->additionalDetails = $additionalDetails;
    }

    /**
     * Get the transaction ID of the payment.
     *
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Get the status of the payment.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Get the timestamp of the payment response.
     *
     * @return \DateTimeImmutable
     */
    public function getTimestamp(): \DateTimeImmutable
    {
        return $this->timestamp;
    }

    /**
     * Get additional response details.
     *
     * @return array
     */
    public function getAdditionalDetails(): array
    {
        return $this->additionalDetails;
    }

    /**
     * Convert the PaymentResponse to an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'transactionId' => $this->transactionId,
            'status' => $this->status,
            'timestamp' => $this->timestamp->format(\DateTime::ATOM),
            'additionalDetails' => $this->additionalDetails,
        ];
    }

    /**
     * Create a PaymentResponse from an array.
     *
     * @param array $data
     *
     * @return PaymentResponse
     */
    public static function fromArray(array $data): PaymentResponse
    {
        return new self(
            $data['transactionId'],
            $data['status'],
            new \DateTimeImmutable($data['timestamp']),
            $data['additionalDetails'] ?? []
        );
    }
}