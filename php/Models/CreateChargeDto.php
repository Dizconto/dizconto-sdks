<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateChargeDto implements AdditionalDataHolder, Parsable 
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
     * @var CreateChargeDto_captureMethod|null $captureMethod The captureMethod property
    */
    private ?CreateChargeDto_captureMethod $captureMethod = null;
    
    /**
     * @var string|null $currency The charge's currency as ISO currency code.
    */
    private ?string $currency = null;
    
    /**
     * @var CreateChargeDto_customer|null $customer The customer to be charged by the charge (ID or new customer).
    */
    private ?CreateChargeDto_customer $customer = null;
    
    /**
     * @var CreateChargeDto_paymentMethod|null $paymentMethod The customer's payment method to use (ID or new payment method).
    */
    private ?CreateChargeDto_paymentMethod $paymentMethod = null;
    
    /**
     * @var string|null $softDescriptor The softDescriptor property
    */
    private ?string $softDescriptor = null;
    
    /**
     * Instantiates a new CreateChargeDto and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setCaptureMethod(new CreateChargeDto_captureMethod('auto'));
        $this->setCurrency('brl');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto {
        return new CreateChargeDto();
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
     * @return CreateChargeDto_captureMethod|null
    */
    public function getCaptureMethod(): ?CreateChargeDto_captureMethod {
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
     * Gets the customer property value. The customer to be charged by the charge (ID or new customer).
     * @return CreateChargeDto_customer|null
    */
    public function getCustomer(): ?CreateChargeDto_customer {
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
            'captureMethod' => fn(ParseNode $n) => $o->setCaptureMethod($n->getEnumValue(CreateChargeDto_captureMethod::class)),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([CreateChargeDto_customer::class, 'createFromDiscriminatorValue'])),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getObjectValue([CreateChargeDto_paymentMethod::class, 'createFromDiscriminatorValue'])),
            'softDescriptor' => fn(ParseNode $n) => $o->setSoftDescriptor($n->getStringValue()),
        ];
    }

    /**
     * Gets the paymentMethod property value. The customer's payment method to use (ID or new payment method).
     * @return CreateChargeDto_paymentMethod|null
    */
    public function getPaymentMethod(): ?CreateChargeDto_paymentMethod {
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeEnumValue('captureMethod', $this->getCaptureMethod());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeObjectValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('softDescriptor', $this->getSoftDescriptor());
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
     * @param CreateChargeDto_captureMethod|null $value Value to set for the captureMethod property.
    */
    public function setCaptureMethod(?CreateChargeDto_captureMethod $value): void {
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
     * Sets the customer property value. The customer to be charged by the charge (ID or new customer).
     * @param CreateChargeDto_customer|null $value Value to set for the customer property.
    */
    public function setCustomer(?CreateChargeDto_customer $value): void {
        $this->customer = $value;
    }

    /**
     * Sets the paymentMethod property value. The customer's payment method to use (ID or new payment method).
     * @param CreateChargeDto_paymentMethod|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?CreateChargeDto_paymentMethod $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the softDescriptor property value. The softDescriptor property
     * @param string|null $value Value to set for the softDescriptor property.
    */
    public function setSoftDescriptor(?string $value): void {
        $this->softDescriptor = $value;
    }

}
