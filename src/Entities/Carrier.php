<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;
use Sylapi\EurocommerceLinkerV2\Enums\CarierType;

class Carrier extends Entity
{
    use Validatable;

    private string $name;

    public function validate(): bool
    {
        $rules = [
            'name' => 'required|max:255',

        ];

        $data = $this->toArray();

        return $this->validateHandle($data, $rules);
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
        ];
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
