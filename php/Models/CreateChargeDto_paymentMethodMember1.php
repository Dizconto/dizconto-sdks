<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateChargeDto_paymentMethodMember1 implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CreateChargeDto_paymentMethodMember1_pm|null $pm The pm property
    */
    private ?CreateChargeDto_paymentMethodMember1_pm $pm = null;
    
    /**
     * Instantiates a new CreateChargeDto_paymentMethodMember1 and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_paymentMethodMember1
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_paymentMethodMember1 {
        return new CreateChargeDto_paymentMethodMember1();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'pm' => fn(ParseNode $n) => $o->setPm($n->getObjectValue([CreateChargeDto_paymentMethodMember1_pm::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the pm property value. The pm property
     * @return CreateChargeDto_paymentMethodMember1_pm|null
    */
    public function getPm(): ?CreateChargeDto_paymentMethodMember1_pm {
        return $this->pm;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('pm', $this->getPm());
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
     * Sets the pm property value. The pm property
     * @param CreateChargeDto_paymentMethodMember1_pm|null $value Value to set for the pm property.
    */
    public function setPm(?CreateChargeDto_paymentMethodMember1_pm $value): void {
        $this->pm = $value;
    }

}
