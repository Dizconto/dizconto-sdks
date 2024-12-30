<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The customer's address
*/
class UpdateCustomerBillingDto_billingAddress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $city The city property
    */
    private ?string $city = null;
    
    /**
     * @var string|null $complement The complement property
    */
    private ?string $complement = null;
    
    /**
     * @var string|null $country The country property
    */
    private ?string $country = null;
    
    /**
     * @var string|null $neighborhood The neighborhood property
    */
    private ?string $neighborhood = null;
    
    /**
     * @var string|null $number The number property
    */
    private ?string $number = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var string|null $street The street property
    */
    private ?string $street = null;
    
    /**
     * @var string|null $zipCode The zipCode property
    */
    private ?string $zipCode = null;
    
    /**
     * Instantiates a new UpdateCustomerBillingDto_billingAddress and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setCountry('BR');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCustomerBillingDto_billingAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCustomerBillingDto_billingAddress {
        return new UpdateCustomerBillingDto_billingAddress();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. The city property
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the complement property value. The complement property
     * @return string|null
    */
    public function getComplement(): ?string {
        return $this->complement;
    }

    /**
     * Gets the country property value. The country property
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'complement' => fn(ParseNode $n) => $o->setComplement($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'neighborhood' => fn(ParseNode $n) => $o->setNeighborhood($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'zipCode' => fn(ParseNode $n) => $o->setZipCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the neighborhood property value. The neighborhood property
     * @return string|null
    */
    public function getNeighborhood(): ?string {
        return $this->neighborhood;
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the street property value. The street property
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Gets the zipCode property value. The zipCode property
     * @return string|null
    */
    public function getZipCode(): ?string {
        return $this->zipCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('complement', $this->getComplement());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('neighborhood', $this->getNeighborhood());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeStringValue('zipCode', $this->getZipCode());
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
     * Sets the city property value. The city property
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the complement property value. The complement property
     * @param string|null $value Value to set for the complement property.
    */
    public function setComplement(?string $value): void {
        $this->complement = $value;
    }

    /**
     * Sets the country property value. The country property
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the neighborhood property value. The neighborhood property
     * @param string|null $value Value to set for the neighborhood property.
    */
    public function setNeighborhood(?string $value): void {
        $this->neighborhood = $value;
    }

    /**
     * Sets the number property value. The number property
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the street property value. The street property
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->street = $value;
    }

    /**
     * Sets the zipCode property value. The zipCode property
     * @param string|null $value Value to set for the zipCode property.
    */
    public function setZipCode(?string $value): void {
        $this->zipCode = $value;
    }

}
