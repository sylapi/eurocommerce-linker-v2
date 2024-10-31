<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;

class OrderItem extends Entity
{
    use Validatable;

    private ?string $id = null;
    private ?string $orderId = null;
    private ?string $productId = null;
    private int $quantity = 0;
    private ?int $realQuantity = null;
    private int $unit = 0;
    private ?int $status;
    private ?string $refId;

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
            'orderId' => $this->getOrderId(),
            'productId' => $this->getProductId(),
            'quantity' => $this->getQuantity(),
            'realQuantity' => $this->getRealQuantity(),
            'unit' => $this->getUnit(),
            'status' => $this->getStatus(),
            'refId' => $this->getRefId(),
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
