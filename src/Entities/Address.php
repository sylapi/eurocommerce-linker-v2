<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;

class Address extends Entity
{
    use Validatable;

    private ?string $name1;
    private ?string $name2;
    private ?string $name3;
    private ?string $country;
    private ?string $buildingNumber;
    private ?string $city;
    private ?string $postCode;
    private ?string $street;
    private ?string $houseNumber;
    private ?string $email;
    private ?string $phoneNumber;
    private ?string $address;
    private ?string $contact;
    private ?string $countryCode;


    public function validate(): bool
    {
        $rules = [
            'name1' => ['nullable', 'string', 'max:100'],
            'name2' => ['nullable', 'string', 'max:100'],
            'name3' => ['nullable', 'string', 'max:100'],
            'country' => ['nullable', 'string', 'max:100'],
            'buildingNumber' => ['nullable', 'string', 'max:100'],
            'city' => ['nullable', 'string', 'max:100'],
            'postCode' => ['nullable', 'string', 'max:100'],
            'street' => ['nullable', 'string', 'max:100'],
            'houseNumber' => ['nullable', 'string', 'max:100'],
            'email' => ['nullable', 'string', 'max:100'],
            'phoneNumber' => ['nullable', 'string', 'max:100'],
            'address' => ['nullable', 'string', 'max:100'],
            'contact' => ['nullable', 'string', 'max:100'],
            'countryCode' => ['nullable', 'string', 'max:100'],
        ];

        $data = $this->toArray();

        return $this->validateHandle($data, $rules);
    }

    public function toArray(): array
    {
        return [
            'name1' => $this->getName1(),
            'name2' => $this->getName2(),
            'name3' => $this->getName3(),
            'country' => $this->getCountry(),
            'buildingNumber' => $this->getBuildingNumber(),
            'city' => $this->getCity(),
            'postCode' => $this->getPostCode(),
            'street' => $this->getStreet(),
            'houseNumber' => $this->getHouseNumber(),
            'email' => $this->getEmail(),
            'phoneNumber' => $this->getPhoneNumber(),
            'address' => $this->getAddress(),
            'contact' => $this->getContact(),
            'countryCode' => $this->getCountryCode(),
        ];
    }

    public function getName1(): ?string
    {
        return $this->name1;
    }

    public function setName1(?string $name1): self
    {
        $this->name1 = $name1;
        return $this;
    }

    public function getName2(): ?string
    {
        return $this->name2;
    }
 
    public function setName2(?string $name2): self
    {
        $this->name2 = $name2;
        return $this;
    }

    public function getName3(): ?string
    {
        return $this->name3;
    }

    public function setName3(?string $name3): self
    {
        $this->name3 = $name3;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
    }

    public function setBuildingNumber(?string $buildingNumber): self
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(?string $postCode): self
    {
        $this->postCode = $postCode;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }


    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
