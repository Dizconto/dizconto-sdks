<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes PaymentMethodDto_pmMember1, PaymentMethodDto_pmMember2
*/
class PaymentMethodDto_pm implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var PaymentMethodDto_pmMember1|null $paymentMethodDto_pmMember1 Composed type representation for type PaymentMethodDto_pmMember1
    */
    private ?PaymentMethodDto_pmMember1 $paymentMethodDto_pmMember1 = null;
    
    /**
     * @var PaymentMethodDto_pmMember2|null $paymentMethodDto_pmMember2 Composed type representation for type PaymentMethodDto_pmMember2
    */
    private ?PaymentMethodDto_pmMember2 $paymentMethodDto_pmMember2 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentMethodDto_pm
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentMethodDto_pm {
        $result = new PaymentMethodDto_pm();
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getPaymentMethodDtoPmMember1() !== null) {
            return $this->getPaymentMethodDtoPmMember1()->getFieldDeserializers();
        } else if ($this->getPaymentMethodDtoPmMember2() !== null) {
            return $this->getPaymentMethodDtoPmMember2()->getFieldDeserializers();
        }
        return [];
    }

    /**
     * Gets the PaymentMethodDto_pmMember1 property value. Composed type representation for type PaymentMethodDto_pmMember1
     * @return PaymentMethodDto_pmMember1|null
    */
    public function getPaymentMethodDtoPmMember1(): ?PaymentMethodDto_pmMember1 {
        return $this->paymentMethodDto_pmMember1;
    }

    /**
     * Gets the PaymentMethodDto_pmMember2 property value. Composed type representation for type PaymentMethodDto_pmMember2
     * @return PaymentMethodDto_pmMember2|null
    */
    public function getPaymentMethodDtoPmMember2(): ?PaymentMethodDto_pmMember2 {
        return $this->paymentMethodDto_pmMember2;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getPaymentMethodDtoPmMember1() !== null) {
            $writer->writeObjectValue(null, $this->getPaymentMethodDtoPmMember1());
        } else if ($this->getPaymentMethodDtoPmMember2() !== null) {
            $writer->writeObjectValue(null, $this->getPaymentMethodDtoPmMember2());
        }
    }

    /**
     * Sets the PaymentMethodDto_pmMember1 property value. Composed type representation for type PaymentMethodDto_pmMember1
     * @param PaymentMethodDto_pmMember1|null $value Value to set for the PaymentMethodDto_pmMember1 property.
    */
    public function setPaymentMethodDtoPmMember1(?PaymentMethodDto_pmMember1 $value): void {
        $this->paymentMethodDto_pmMember1 = $value;
    }

    /**
     * Sets the PaymentMethodDto_pmMember2 property value. Composed type representation for type PaymentMethodDto_pmMember2
     * @param PaymentMethodDto_pmMember2|null $value Value to set for the PaymentMethodDto_pmMember2 property.
    */
    public function setPaymentMethodDtoPmMember2(?PaymentMethodDto_pmMember2 $value): void {
        $this->paymentMethodDto_pmMember2 = $value;
    }

}
