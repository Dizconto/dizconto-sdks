<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateChargeDto_paymentMethodMember1_pmMember2 implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CreateChargeDto_paymentMethodMember1_pmMember2_type|null $type The type property
    */
    private ?CreateChargeDto_paymentMethodMember1_pmMember2_type $type = null;
    
    /**
     * Instantiates a new CreateChargeDto_paymentMethodMember1_pmMember2 and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_paymentMethodMember1_pmMember2
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_paymentMethodMember1_pmMember2 {
        return new CreateChargeDto_paymentMethodMember1_pmMember2();
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
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CreateChargeDto_paymentMethodMember1_pmMember2_type::class)),
        ];
    }

    /**
     * Gets the type property value. The type property
     * @return CreateChargeDto_paymentMethodMember1_pmMember2_type|null
    */
    public function getType(): ?CreateChargeDto_paymentMethodMember1_pmMember2_type {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the type property value. The type property
     * @param CreateChargeDto_paymentMethodMember1_pmMember2_type|null $value Value to set for the type property.
    */
    public function setType(?CreateChargeDto_paymentMethodMember1_pmMember2_type $value): void {
        $this->type = $value;
    }

}
