<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreateChargeDto_customerMember1, string
*/
class CreateChargeDto_customer implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreateChargeDto_customerMember1|null $createChargeDto_customerMember1 Composed type representation for type CreateChargeDto_customerMember1
    */
    private ?CreateChargeDto_customerMember1 $createChargeDto_customerMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_customer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_customer {
        $result = new CreateChargeDto_customer();
        if ($parseNode->getStringValue() !== null) {
            $finalValue = $parseNode->getStringValue();
            $result->setString($finalValue);
        }
        return $result;
    }

    /**
     * Gets the CreateChargeDto_customerMember1 property value. Composed type representation for type CreateChargeDto_customerMember1
     * @return CreateChargeDto_customerMember1|null
    */
    public function getCreateChargeDtoCustomerMember1(): ?CreateChargeDto_customerMember1 {
        return $this->createChargeDto_customerMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreateChargeDtoCustomerMember1() !== null) {
            return $this->getCreateChargeDtoCustomerMember1()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getCreateChargeDtoCustomerMember1() !== null) {
            $writer->writeObjectValue(null, $this->getCreateChargeDtoCustomerMember1());
        } else if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        }
    }

    /**
     * Sets the CreateChargeDto_customerMember1 property value. Composed type representation for type CreateChargeDto_customerMember1
     * @param CreateChargeDto_customerMember1|null $value Value to set for the CreateChargeDto_customerMember1 property.
    */
    public function setCreateChargeDtoCustomerMember1(?CreateChargeDto_customerMember1 $value): void {
        $this->createChargeDto_customerMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
