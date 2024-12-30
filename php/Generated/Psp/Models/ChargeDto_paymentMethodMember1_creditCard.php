<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChargeDto_paymentMethodMember1_creditCard implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fingerprint The fingerprint property
    */
    private ?string $fingerprint = null;
    
    /**
     * @var string|null $last4 The last4 property
    */
    private ?string $last4 = null;
    
    /**
     * Instantiates a new ChargeDto_paymentMethodMember1_creditCard and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChargeDto_paymentMethodMember1_creditCard
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChargeDto_paymentMethodMember1_creditCard {
        return new ChargeDto_paymentMethodMember1_creditCard();
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
            'fingerprint' => fn(ParseNode $n) => $o->setFingerprint($n->getStringValue()),
            'last4' => fn(ParseNode $n) => $o->setLast4($n->getStringValue()),
        ];
    }

    /**
     * Gets the fingerprint property value. The fingerprint property
     * @return string|null
    */
    public function getFingerprint(): ?string {
        return $this->fingerprint;
    }

    /**
     * Gets the last4 property value. The last4 property
     * @return string|null
    */
    public function getLast4(): ?string {
        return $this->last4;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fingerprint', $this->getFingerprint());
        $writer->writeStringValue('last4', $this->getLast4());
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
     * Sets the fingerprint property value. The fingerprint property
     * @param string|null $value Value to set for the fingerprint property.
    */
    public function setFingerprint(?string $value): void {
        $this->fingerprint = $value;
    }

    /**
     * Sets the last4 property value. The last4 property
     * @param string|null $value Value to set for the last4 property.
    */
    public function setLast4(?string $value): void {
        $this->last4 = $value;
    }

}
