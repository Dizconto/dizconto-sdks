<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateCustomerBillingDto implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var UpdateCustomerBillingDto_billingAddress|null $billingAddress The customer's address
    */
    private ?UpdateCustomerBillingDto_billingAddress $billingAddress = null;
    
    /**
     * @var string|null $email The customer's email address
    */
    private ?string $email = null;
    
    /**
     * @var string|null $name The customer's full name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone The customer's phone number
    */
    private ?string $phone = null;
    
    /**
     * @var UpdateCustomerBillingDto_tax|null $tax The customer's tax ID
    */
    private ?UpdateCustomerBillingDto_tax $tax = null;
    
    /**
     * Instantiates a new UpdateCustomerBillingDto and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCustomerBillingDto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCustomerBillingDto {
        return new UpdateCustomerBillingDto();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingAddress property value. The customer's address
     * @return UpdateCustomerBillingDto_billingAddress|null
    */
    public function getBillingAddress(): ?UpdateCustomerBillingDto_billingAddress {
        return $this->billingAddress;
    }

    /**
     * Gets the email property value. The customer's email address
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([UpdateCustomerBillingDto_billingAddress::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'tax' => fn(ParseNode $n) => $o->setTax($n->getObjectValue([UpdateCustomerBillingDto_tax::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the name property value. The customer's full name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the phone property value. The customer's phone number
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the tax property value. The customer's tax ID
     * @return UpdateCustomerBillingDto_tax|null
    */
    public function getTax(): ?UpdateCustomerBillingDto_tax {
        return $this->tax;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeObjectValue('tax', $this->getTax());
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
     * Sets the billingAddress property value. The customer's address
     * @param UpdateCustomerBillingDto_billingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?UpdateCustomerBillingDto_billingAddress $value): void {
        $this->billingAddress = $value;
    }

    /**
     * Sets the email property value. The customer's email address
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the name property value. The customer's full name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the phone property value. The customer's phone number
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the tax property value. The customer's tax ID
     * @param UpdateCustomerBillingDto_tax|null $value Value to set for the tax property.
    */
    public function setTax(?UpdateCustomerBillingDto_tax $value): void {
        $this->tax = $value;
    }

}
