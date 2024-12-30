<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateChargeDto_paymentMethodMember1_pmMember1_creditCard implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cardHolderName The cardHolderName property
    */
    private ?string $cardHolderName = null;
    
    /**
     * @var string|null $cardNumber The cardNumber property
    */
    private ?string $cardNumber = null;
    
    /**
     * @var string|null $cvv The cvv property
    */
    private ?string $cvv = null;
    
    /**
     * @var float|null $expMonth The expMonth property
    */
    private ?float $expMonth = null;
    
    /**
     * @var float|null $expYear The expYear property
    */
    private ?float $expYear = null;
    
    /**
     * Instantiates a new CreateChargeDto_paymentMethodMember1_pmMember1_creditCard and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateChargeDto_paymentMethodMember1_pmMember1_creditCard
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateChargeDto_paymentMethodMember1_pmMember1_creditCard {
        return new CreateChargeDto_paymentMethodMember1_pmMember1_creditCard();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cardHolderName property value. The cardHolderName property
     * @return string|null
    */
    public function getCardHolderName(): ?string {
        return $this->cardHolderName;
    }

    /**
     * Gets the cardNumber property value. The cardNumber property
     * @return string|null
    */
    public function getCardNumber(): ?string {
        return $this->cardNumber;
    }

    /**
     * Gets the cvv property value. The cvv property
     * @return string|null
    */
    public function getCvv(): ?string {
        return $this->cvv;
    }

    /**
     * Gets the expMonth property value. The expMonth property
     * @return float|null
    */
    public function getExpMonth(): ?float {
        return $this->expMonth;
    }

    /**
     * Gets the expYear property value. The expYear property
     * @return float|null
    */
    public function getExpYear(): ?float {
        return $this->expYear;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cardHolderName' => fn(ParseNode $n) => $o->setCardHolderName($n->getStringValue()),
            'cardNumber' => fn(ParseNode $n) => $o->setCardNumber($n->getStringValue()),
            'cvv' => fn(ParseNode $n) => $o->setCvv($n->getStringValue()),
            'expMonth' => fn(ParseNode $n) => $o->setExpMonth($n->getFloatValue()),
            'expYear' => fn(ParseNode $n) => $o->setExpYear($n->getFloatValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cardHolderName', $this->getCardHolderName());
        $writer->writeStringValue('cardNumber', $this->getCardNumber());
        $writer->writeStringValue('cvv', $this->getCvv());
        $writer->writeFloatValue('expMonth', $this->getExpMonth());
        $writer->writeFloatValue('expYear', $this->getExpYear());
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
     * Sets the cardHolderName property value. The cardHolderName property
     * @param string|null $value Value to set for the cardHolderName property.
    */
    public function setCardHolderName(?string $value): void {
        $this->cardHolderName = $value;
    }

    /**
     * Sets the cardNumber property value. The cardNumber property
     * @param string|null $value Value to set for the cardNumber property.
    */
    public function setCardNumber(?string $value): void {
        $this->cardNumber = $value;
    }

    /**
     * Sets the cvv property value. The cvv property
     * @param string|null $value Value to set for the cvv property.
    */
    public function setCvv(?string $value): void {
        $this->cvv = $value;
    }

    /**
     * Sets the expMonth property value. The expMonth property
     * @param float|null $value Value to set for the expMonth property.
    */
    public function setExpMonth(?float $value): void {
        $this->expMonth = $value;
    }

    /**
     * Sets the expYear property value. The expYear property
     * @param float|null $value Value to set for the expYear property.
    */
    public function setExpYear(?float $value): void {
        $this->expYear = $value;
    }

}
