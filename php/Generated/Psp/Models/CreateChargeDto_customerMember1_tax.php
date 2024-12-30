<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The customer's tax ID
*/
class CreateChargeDto_customerMember1_tax implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $taxId The value of the customer's tax ID
    */
    private ?string $taxId = null;
    
    /**
     * @var CreateChargeDto_customerMember1_tax_taxType|null $taxType The type of the customer's tax ID
    */
    private ?CreateChargeDto_customerMember1_tax_taxType $taxType = null;
    
    /**
     * Instantiates a new CreateChargeDto_customerMember1_tax and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_customerMember1_tax
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_customerMember1_tax {
        return new CreateChargeDto_customerMember1_tax();
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
            'taxId' => fn(ParseNode $n) => $o->setTaxId($n->getStringValue()),
            'taxType' => fn(ParseNode $n) => $o->setTaxType($n->getEnumValue(CreateChargeDto_customerMember1_tax_taxType::class)),
        ];
    }

    /**
     * Gets the taxId property value. The value of the customer's tax ID
     * @return string|null
    */
    public function getTaxId(): ?string {
        return $this->taxId;
    }

    /**
     * Gets the taxType property value. The type of the customer's tax ID
     * @return CreateChargeDto_customerMember1_tax_taxType|null
    */
    public function getTaxType(): ?CreateChargeDto_customerMember1_tax_taxType {
        return $this->taxType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('taxId', $this->getTaxId());
        $writer->writeEnumValue('taxType', $this->getTaxType());
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
     * Sets the taxId property value. The value of the customer's tax ID
     * @param string|null $value Value to set for the taxId property.
    */
    public function setTaxId(?string $value): void {
        $this->taxId = $value;
    }

    /**
     * Sets the taxType property value. The type of the customer's tax ID
     * @param CreateChargeDto_customerMember1_tax_taxType|null $value Value to set for the taxType property.
    */
    public function setTaxType(?CreateChargeDto_customerMember1_tax_taxType $value): void {
        $this->taxType = $value;
    }

}