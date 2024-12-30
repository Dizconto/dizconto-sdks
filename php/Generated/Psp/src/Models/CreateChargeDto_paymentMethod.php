<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreateChargeDto_paymentMethodMember1, string
*/
class CreateChargeDto_paymentMethod implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreateChargeDto_paymentMethodMember1|null $createChargeDto_paymentMethodMember1 Composed type representation for type CreateChargeDto_paymentMethodMember1
    */
    private ?CreateChargeDto_paymentMethodMember1 $createChargeDto_paymentMethodMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_paymentMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_paymentMethod {
        $result = new CreateChargeDto_paymentMethod();
        if ($parseNode->getStringValue() !== null) {
            $finalValue = $parseNode->getStringValue();
            $result->setString($finalValue);
        }
        return $result;
    }

    /**
     * Gets the CreateChargeDto_paymentMethodMember1 property value. Composed type representation for type CreateChargeDto_paymentMethodMember1
     * @return CreateChargeDto_paymentMethodMember1|null
    */
    public function getCreateChargeDtoPaymentMethodMember1(): ?CreateChargeDto_paymentMethodMember1 {
        return $this->createChargeDto_paymentMethodMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreateChargeDtoPaymentMethodMember1() !== null) {
            return $this->getCreateChargeDtoPaymentMethodMember1()->getFieldDeserializers();
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
        if ($this->getCreateChargeDtoPaymentMethodMember1() !== null) {
            $writer->writeObjectValue(null, $this->getCreateChargeDtoPaymentMethodMember1());
        } else if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        }
    }

    /**
     * Sets the CreateChargeDto_paymentMethodMember1 property value. Composed type representation for type CreateChargeDto_paymentMethodMember1
     * @param CreateChargeDto_paymentMethodMember1|null $value Value to set for the CreateChargeDto_paymentMethodMember1 property.
    */
    public function setCreateChargeDtoPaymentMethodMember1(?CreateChargeDto_paymentMethodMember1 $value): void {
        $this->createChargeDto_paymentMethodMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
