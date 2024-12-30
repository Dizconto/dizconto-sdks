<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes ChargeDto_paymentMethodMember1, ChargeDto_paymentMethodMember2
*/
class ChargeDto_paymentMethod implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var ChargeDto_paymentMethodMember1|null $chargeDto_paymentMethodMember1 Composed type representation for type ChargeDto_paymentMethodMember1
    */
    private ?ChargeDto_paymentMethodMember1 $chargeDto_paymentMethodMember1 = null;
    
    /**
     * @var ChargeDto_paymentMethodMember2|null $chargeDto_paymentMethodMember2 Composed type representation for type ChargeDto_paymentMethodMember2
    */
    private ?ChargeDto_paymentMethodMember2 $chargeDto_paymentMethodMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChargeDto_paymentMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChargeDto_paymentMethod {
        $result = new ChargeDto_paymentMethod();
        return $result;
    }

    /**
     * Gets the ChargeDto_paymentMethodMember1 property value. Composed type representation for type ChargeDto_paymentMethodMember1
     * @return ChargeDto_paymentMethodMember1|null
    */
    public function getChargeDtoPaymentMethodMember1(): ?ChargeDto_paymentMethodMember1 {
        return $this->chargeDto_paymentMethodMember1;
    }

    /**
     * Gets the ChargeDto_paymentMethodMember2 property value. Composed type representation for type ChargeDto_paymentMethodMember2
     * @return ChargeDto_paymentMethodMember2|null
    */
    public function getChargeDtoPaymentMethodMember2(): ?ChargeDto_paymentMethodMember2 {
        return $this->chargeDto_paymentMethodMember2;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getChargeDtoPaymentMethodMember1() !== null) {
            return $this->getChargeDtoPaymentMethodMember1()->getFieldDeserializers();
        } else if ($this->getChargeDtoPaymentMethodMember2() !== null) {
            return $this->getChargeDtoPaymentMethodMember2()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getChargeDtoPaymentMethodMember1() !== null) {
            $writer->writeObjectValue(null, $this->getChargeDtoPaymentMethodMember1());
        } else if ($this->getChargeDtoPaymentMethodMember2() !== null) {
            $writer->writeObjectValue(null, $this->getChargeDtoPaymentMethodMember2());
        }
    }

    /**
     * Sets the ChargeDto_paymentMethodMember1 property value. Composed type representation for type ChargeDto_paymentMethodMember1
     * @param ChargeDto_paymentMethodMember1|null $value Value to set for the ChargeDto_paymentMethodMember1 property.
    */
    public function setChargeDtoPaymentMethodMember1(?ChargeDto_paymentMethodMember1 $value): void {
        $this->chargeDto_paymentMethodMember1 = $value;
    }

    /**
     * Sets the ChargeDto_paymentMethodMember2 property value. Composed type representation for type ChargeDto_paymentMethodMember2
     * @param ChargeDto_paymentMethodMember2|null $value Value to set for the ChargeDto_paymentMethodMember2 property.
    */
    public function setChargeDtoPaymentMethodMember2(?ChargeDto_paymentMethodMember2 $value): void {
        $this->chargeDto_paymentMethodMember2 = $value;
    }

}
