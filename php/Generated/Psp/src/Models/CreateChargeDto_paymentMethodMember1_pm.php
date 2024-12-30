<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreateChargeDto_paymentMethodMember1_pmMember1, CreateChargeDto_paymentMethodMember1_pmMember2
*/
class CreateChargeDto_paymentMethodMember1_pm implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreateChargeDto_paymentMethodMember1_pmMember1|null $createChargeDto_paymentMethodMember1_pmMember1 Composed type representation for type CreateChargeDto_paymentMethodMember1_pmMember1
    */
    private ?CreateChargeDto_paymentMethodMember1_pmMember1 $createChargeDto_paymentMethodMember1_pmMember1 = null;
    
    /**
     * @var CreateChargeDto_paymentMethodMember1_pmMember2|null $createChargeDto_paymentMethodMember1_pmMember2 Composed type representation for type CreateChargeDto_paymentMethodMember1_pmMember2
    */
    private ?CreateChargeDto_paymentMethodMember1_pmMember2 $createChargeDto_paymentMethodMember1_pmMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_paymentMethodMember1_pm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_paymentMethodMember1_pm {
        $result = new CreateChargeDto_paymentMethodMember1_pm();
        return $result;
    }

    /**
     * Gets the CreateChargeDto_paymentMethodMember1_pmMember1 property value. Composed type representation for type CreateChargeDto_paymentMethodMember1_pmMember1
     * @return CreateChargeDto_paymentMethodMember1_pmMember1|null
    */
    public function getCreateChargeDtoPaymentMethodMember1PmMember1(): ?CreateChargeDto_paymentMethodMember1_pmMember1 {
        return $this->createChargeDto_paymentMethodMember1_pmMember1;
    }

    /**
     * Gets the CreateChargeDto_paymentMethodMember1_pmMember2 property value. Composed type representation for type CreateChargeDto_paymentMethodMember1_pmMember2
     * @return CreateChargeDto_paymentMethodMember1_pmMember2|null
    */
    public function getCreateChargeDtoPaymentMethodMember1PmMember2(): ?CreateChargeDto_paymentMethodMember1_pmMember2 {
        return $this->createChargeDto_paymentMethodMember1_pmMember2;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreateChargeDtoPaymentMethodMember1PmMember1() !== null) {
            return $this->getCreateChargeDtoPaymentMethodMember1PmMember1()->getFieldDeserializers();
        } else if ($this->getCreateChargeDtoPaymentMethodMember1PmMember2() !== null) {
            return $this->getCreateChargeDtoPaymentMethodMember1PmMember2()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getCreateChargeDtoPaymentMethodMember1PmMember1() !== null) {
            $writer->writeObjectValue(null, $this->getCreateChargeDtoPaymentMethodMember1PmMember1());
        } else if ($this->getCreateChargeDtoPaymentMethodMember1PmMember2() !== null) {
            $writer->writeObjectValue(null, $this->getCreateChargeDtoPaymentMethodMember1PmMember2());
        }
    }

    /**
     * Sets the CreateChargeDto_paymentMethodMember1_pmMember1 property value. Composed type representation for type CreateChargeDto_paymentMethodMember1_pmMember1
     * @param CreateChargeDto_paymentMethodMember1_pmMember1|null $value Value to set for the CreateChargeDto_paymentMethodMember1_pmMember1 property.
    */
    public function setCreateChargeDtoPaymentMethodMember1PmMember1(?CreateChargeDto_paymentMethodMember1_pmMember1 $value): void {
        $this->createChargeDto_paymentMethodMember1_pmMember1 = $value;
    }

    /**
     * Sets the CreateChargeDto_paymentMethodMember1_pmMember2 property value. Composed type representation for type CreateChargeDto_paymentMethodMember1_pmMember2
     * @param CreateChargeDto_paymentMethodMember1_pmMember2|null $value Value to set for the CreateChargeDto_paymentMethodMember1_pmMember2 property.
    */
    public function setCreateChargeDtoPaymentMethodMember1PmMember2(?CreateChargeDto_paymentMethodMember1_pmMember2 $value): void {
        $this->createChargeDto_paymentMethodMember1_pmMember2 = $value;
    }

}
