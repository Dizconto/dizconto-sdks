<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaginatedMerchantTransactionDto_meta implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $count The count property
    */
    private ?float $count = null;
    
    /**
     * @var float|null $total The total property
    */
    private ?float $total = null;
    
    /**
     * Instantiates a new PaginatedMerchantTransactionDto_meta and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaginatedMerchantTransactionDto_meta
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaginatedMerchantTransactionDto_meta {
        return new PaginatedMerchantTransactionDto_meta();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the count property value. The count property
     * @return float|null
    */
    public function getCount(): ?float {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'count' => fn(ParseNode $n) => $o->setCount($n->getFloatValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getFloatValue()),
        ];
    }

    /**
     * Gets the total property value. The total property
     * @return float|null
    */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('count', $this->getCount());
        $writer->writeFloatValue('total', $this->getTotal());
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
     * Sets the count property value. The count property
     * @param float|null $value Value to set for the count property.
    */
    public function setCount(?float $value): void {
        $this->count = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param float|null $value Value to set for the total property.
    */
    public function setTotal(?float $value): void {
        $this->total = $value;
    }

}
