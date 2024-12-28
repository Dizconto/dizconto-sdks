<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes CreatePaymentMethodDto_pmMember1, CreatePaymentMethodDto_pmMember2
*/
class CreatePaymentMethodDto_pm implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var CreatePaymentMethodDto_pmMember1|null $createPaymentMethodDto_pmMember1 Composed type representation for type CreatePaymentMethodDto_pmMember1
    */
    private ?CreatePaymentMethodDto_pmMember1 $createPaymentMethodDto_pmMember1 = null;
    
    /**
     * @var CreatePaymentMethodDto_pmMember2|null $createPaymentMethodDto_pmMember2 Composed type representation for type CreatePaymentMethodDto_pmMember2
    */
    private ?CreatePaymentMethodDto_pmMember2 $createPaymentMethodDto_pmMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePaymentMethodDto_pm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePaymentMethodDto_pm {
        $result = new CreatePaymentMethodDto_pm();
        return $result;
    }

    /**
     * Gets the CreatePaymentMethodDto_pmMember1 property value. Composed type representation for type CreatePaymentMethodDto_pmMember1
     * @return CreatePaymentMethodDto_pmMember1|null
    */
    public function getCreatePaymentMethodDtoPmMember1(): ?CreatePaymentMethodDto_pmMember1 {
        return $this->createPaymentMethodDto_pmMember1;
    }

    /**
     * Gets the CreatePaymentMethodDto_pmMember2 property value. Composed type representation for type CreatePaymentMethodDto_pmMember2
     * @return CreatePaymentMethodDto_pmMember2|null
    */
    public function getCreatePaymentMethodDtoPmMember2(): ?CreatePaymentMethodDto_pmMember2 {
        return $this->createPaymentMethodDto_pmMember2;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getCreatePaymentMethodDtoPmMember1() !== null) {
            return $this->getCreatePaymentMethodDtoPmMember1()->getFieldDeserializers();
        } else if ($this->getCreatePaymentMethodDtoPmMember2() !== null) {
            return $this->getCreatePaymentMethodDtoPmMember2()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getCreatePaymentMethodDtoPmMember1() !== null) {
            $writer->writeObjectValue(null, $this->getCreatePaymentMethodDtoPmMember1());
        } else if ($this->getCreatePaymentMethodDtoPmMember2() !== null) {
            $writer->writeObjectValue(null, $this->getCreatePaymentMethodDtoPmMember2());
        }
    }

    /**
     * Sets the CreatePaymentMethodDto_pmMember1 property value. Composed type representation for type CreatePaymentMethodDto_pmMember1
     * @param CreatePaymentMethodDto_pmMember1|null $value Value to set for the CreatePaymentMethodDto_pmMember1 property.
    */
    public function setCreatePaymentMethodDtoPmMember1(?CreatePaymentMethodDto_pmMember1 $value): void {
        $this->createPaymentMethodDto_pmMember1 = $value;
    }

    /**
     * Sets the CreatePaymentMethodDto_pmMember2 property value. Composed type representation for type CreatePaymentMethodDto_pmMember2
     * @param CreatePaymentMethodDto_pmMember2|null $value Value to set for the CreatePaymentMethodDto_pmMember2 property.
    */
    public function setCreatePaymentMethodDtoPmMember2(?CreatePaymentMethodDto_pmMember2 $value): void {
        $this->createPaymentMethodDto_pmMember2 = $value;
    }

}
