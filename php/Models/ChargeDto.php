<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChargeDto implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $amount The amount to be collected by the charge.
    */
    private ?float $amount = null;
    
    /**
     * @var ChargeDto_captureMethod|null $captureMethod The captureMethod property
    */
    private ?ChargeDto_captureMethod $captureMethod = null;
    
    /**
     * @var string|null $currency The charge's currency as ISO currency code.
    */
    private ?string $currency = null;
    
    /**
     * @var ChargeDto_customer|null $customer The customer to be charged by the charge.
    */
    private ?ChargeDto_customer $customer = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var ChargeDto_paymentMethod|null $paymentMethod The customer's payment method to use.
    */
    private ?ChargeDto_paymentMethod $paymentMethod = null;
    
    /**
     * @var string|null $softDescriptor The softDescriptor property
    */
    private ?string $softDescriptor = null;
    
    /**
     * @var ChargeDto_status|null $status The charge status.
    */
    private ?ChargeDto_status $status = null;
    
    /**
     * Instantiates a new ChargeDto and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setCaptureMethod(new ChargeDto_captureMethod('auto'));
        $this->setCurrency('brl');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChargeDto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChargeDto {
        return new ChargeDto();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. The amount to be collected by the charge.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the captureMethod property value. The captureMethod property
     * @return ChargeDto_captureMethod|null
    */
    public function getCaptureMethod(): ?ChargeDto_captureMethod {
        return $this->captureMethod;
    }

    /**
     * Gets the currency property value. The charge's currency as ISO currency code.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the customer property value. The customer to be charged by the charge.
     * @return ChargeDto_customer|null
    */
    public function getCustomer(): ?ChargeDto_customer {
        return $this->customer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'captureMethod' => fn(ParseNode $n) => $o->setCaptureMethod($n->getEnumValue(ChargeDto_captureMethod::class)),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([ChargeDto_customer::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getObjectValue([ChargeDto_paymentMethod::class, 'createFromDiscriminatorValue'])),
            'softDescriptor' => fn(ParseNode $n) => $o->setSoftDescriptor($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ChargeDto_status::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the paymentMethod property value. The customer's payment method to use.
     * @return ChargeDto_paymentMethod|null
    */
    public function getPaymentMethod(): ?ChargeDto_paymentMethod {
        return $this->paymentMethod;
    }

    /**
     * Gets the softDescriptor property value. The softDescriptor property
     * @return string|null
    */
    public function getSoftDescriptor(): ?string {
        return $this->softDescriptor;
    }

    /**
     * Gets the status property value. The charge status.
     * @return ChargeDto_status|null
    */
    public function getStatus(): ?ChargeDto_status {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeEnumValue('captureMethod', $this->getCaptureMethod());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('softDescriptor', $this->getSoftDescriptor());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the amount property value. The amount to be collected by the charge.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the captureMethod property value. The captureMethod property
     * @param ChargeDto_captureMethod|null $value Value to set for the captureMethod property.
    */
    public function setCaptureMethod(?ChargeDto_captureMethod $value): void {
        $this->captureMethod = $value;
    }

    /**
     * Sets the currency property value. The charge's currency as ISO currency code.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the customer property value. The customer to be charged by the charge.
     * @param ChargeDto_customer|null $value Value to set for the customer property.
    */
    public function setCustomer(?ChargeDto_customer $value): void {
        $this->customer = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the paymentMethod property value. The customer's payment method to use.
     * @param ChargeDto_paymentMethod|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?ChargeDto_paymentMethod $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the softDescriptor property value. The softDescriptor property
     * @param string|null $value Value to set for the softDescriptor property.
    */
    public function setSoftDescriptor(?string $value): void {
        $this->softDescriptor = $value;
    }

    /**
     * Sets the status property value. The charge status.
     * @param ChargeDto_status|null $value Value to set for the status property.
    */
    public function setStatus(?ChargeDto_status $value): void {
        $this->status = $value;
    }

}
