<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeesPaginatedDto_data implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FeesPaginatedDto_data_feature|null $feature The feature property
    */
    private ?FeesPaginatedDto_data_feature $feature = null;
    
    /**
     * @var float|null $fixed The fixed value (in cents; e.g. 1 = R$ 0.01)
    */
    private ?float $fixed = null;
    
    /**
     * @var float|null $percentage The percentage value (in cents; e.g. 1 = 0.01%)
    */
    private ?float $percentage = null;
    
    /**
     * Instantiates a new FeesPaginatedDto_data and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeesPaginatedDto_data
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeesPaginatedDto_data {
        return new FeesPaginatedDto_data();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the feature property value. The feature property
     * @return FeesPaginatedDto_data_feature|null
    */
    public function getFeature(): ?FeesPaginatedDto_data_feature {
        return $this->feature;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'feature' => fn(ParseNode $n) => $o->setFeature($n->getEnumValue(FeesPaginatedDto_data_feature::class)),
            'fixed' => fn(ParseNode $n) => $o->setFixed($n->getFloatValue()),
            'percentage' => fn(ParseNode $n) => $o->setPercentage($n->getFloatValue()),
        ];
    }

    /**
     * Gets the fixed property value. The fixed value (in cents; e.g. 1 = R$ 0.01)
     * @return float|null
    */
    public function getFixed(): ?float {
        return $this->fixed;
    }

    /**
     * Gets the percentage property value. The percentage value (in cents; e.g. 1 = 0.01%)
     * @return float|null
    */
    public function getPercentage(): ?float {
        return $this->percentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('feature', $this->getFeature());
        $writer->writeFloatValue('fixed', $this->getFixed());
        $writer->writeFloatValue('percentage', $this->getPercentage());
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
     * Sets the feature property value. The feature property
     * @param FeesPaginatedDto_data_feature|null $value Value to set for the feature property.
    */
    public function setFeature(?FeesPaginatedDto_data_feature $value): void {
        $this->feature = $value;
    }

    /**
     * Sets the fixed property value. The fixed value (in cents; e.g. 1 = R$ 0.01)
     * @param float|null $value Value to set for the fixed property.
    */
    public function setFixed(?float $value): void {
        $this->fixed = $value;
    }

    /**
     * Sets the percentage property value. The percentage value (in cents; e.g. 1 = 0.01%)
     * @param float|null $value Value to set for the percentage property.
    */
    public function setPercentage(?float $value): void {
        $this->percentage = $value;
    }

}
