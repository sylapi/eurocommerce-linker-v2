<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;

class OrderItem extends Entity
{
    use Validatable;

    private ?string $id;
    private ?string $orderId;
    private ?string $productId;
    private int $quantity;
    private ?int $realQuantity;
    private int $unit;
    private int $status;
    private ?string $refId;

    public function validate(): bool
    {
        $rules = [
            'id' => ['nullable', 'string', 'max:100'],
            'orderId' => ['nullable', 'string', 'max:100'],
            'productId' => ['nullable', 'string', 'max:100'],
            'quantity' => ['required', 'integer'],
            'realQuantity' => ['nullable', 'integer'],
            'unit' => ['required', 'integer'],
            'status' => ['required', 'integer'],
            'refId' => ['nullable', 'string', 'max:100'],
        ];

        $data = $this->toArray();

        return $this->validateHandle($data, $rules);
    }

    public function toArray(): array
    {
        return [
            
        ];
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getRealQuantity(): ?int
    {
        return $this->realQuantity;
    }

    public function setRealQuantity(?int $realQuantity): self
    {
        $this->realQuantity = $realQuantity;
        return $this;
    }

    public function getUnit(): int
    {
        return $this->unit;
    }

    public function setUnit(int $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getRefId(): ?string
    {
        return $this->refId;
    }

    public function setRefId(?string $refId): self
    {
        $this->refId = $refId;
        return $this;
    }
}
