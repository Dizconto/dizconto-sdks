<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaginatedMerchantTransactionDto implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PaginatedMerchantTransactionDto_data>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * @var PaginatedMerchantTransactionDto_meta|null $meta The meta property
    */
    private ?PaginatedMerchantTransactionDto_meta $meta = null;
    
    /**
     * Instantiates a new PaginatedMerchantTransactionDto and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaginatedMerchantTransactionDto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaginatedMerchantTransactionDto {
        return new PaginatedMerchantTransactionDto();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. The data property
     * @return array<PaginatedMerchantTransactionDto_data>|null
    */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => fn(ParseNode $n) => $o->setData($n->getCollectionOfObjectValues([PaginatedMerchantTransactionDto_data::class, 'createFromDiscriminatorValue'])),
            'meta' => fn(ParseNode $n) => $o->setMeta($n->getObjectValue([PaginatedMerchantTransactionDto_meta::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the meta property value. The meta property
     * @return PaginatedMerchantTransactionDto_meta|null
    */
    public function getMeta(): ?PaginatedMerchantTransactionDto_meta {
        return $this->meta;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('data', $this->getData());
        $writer->writeObjectValue('meta', $this->getMeta());
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
     * Sets the data property value. The data property
     * @param array<PaginatedMerchantTransactionDto_data>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

    /**
     * Sets the meta property value. The meta property
     * @param PaginatedMerchantTransactionDto_meta|null $value Value to set for the meta property.
    */
    public function setMeta(?PaginatedMerchantTransactionDto_meta $value): void {
        $this->meta = $value;
    }

}
