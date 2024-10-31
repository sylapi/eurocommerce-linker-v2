<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;

class CarrierService extends Entity
{
    use Validatable;

    private string $id;
    private string $name;


    public function validate(): bool
    {
        $rules = [

        ];

        $data = $this->toArray();

        return $this->validateHandle($data, $rules);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): CarrierService
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Carrier
    {
        $this->name = $name;
        return $this;
    }

}
