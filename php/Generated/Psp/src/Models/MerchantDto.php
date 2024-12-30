<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MerchantDto implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $balance The balance property
    */
    private ?float $balance = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $partnerId The partnerId property
    */
    private ?string $partnerId = null;
    
    /**
     * @var MerchantDto_status|null $status The status property
    */
    private ?MerchantDto_status $status = null;
    
    /**
     * Instantiates a new MerchantDto and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MerchantDto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MerchantDto {
        return new MerchantDto();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the balance property value. The balance property
     * @return float|null
    */
    public function getBalance(): ?float {
        return $this->balance;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'balance' => fn(ParseNode $n) => $o->setBalance($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'partnerId' => fn(ParseNode $n) => $o->setPartnerId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(MerchantDto_status::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the partnerId property value. The partnerId property
     * @return string|null
    */
    public function getPartnerId(): ?string {
        return $this->partnerId;
    }

    /**
     * Gets the status property value. The status property
     * @return MerchantDto_status|null
    */
    public function getStatus(): ?MerchantDto_status {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('balance', $this->getBalance());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('partnerId', $this->getPartnerId());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the balance property value. The balance property
     * @param float|null $value Value to set for the balance property.
    */
    public function setBalance(?float $value): void {
        $this->balance = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the partnerId property value. The partnerId property
     * @param string|null $value Value to set for the partnerId property.
    */
    public function setPartnerId(?string $value): void {
        $this->partnerId = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param MerchantDto_status|null $value Value to set for the status property.
    */
    public function setStatus(?MerchantDto_status $value): void {
        $this->status = $value;
    }

}
