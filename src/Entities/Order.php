<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;
use Sylapi\EurocommerceLinkerV2\Collections\OrderItems;

class Order extends Entity
{
    use Validatable;

    private ?string $id = null;
    private ?string $carrierId = null;
    private ?string $companyId = null;
    private ?string $carrierServiceId = null;
    private ?string $orderNumber = null;
    private ?int $source = null;
    private ?bool $addToAddressBook = false;
    private ?Address $sender = null;
    private ?Address $receiver = null;
    private ?OrderItems $orderItems = null;
    private int $orderType = 0;
    private ?int $status = null;
    private ?array $properties = null;

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
            'carrierId' => $this->getCarrierId(),
            'companyId' => $this->getCompanyId(),
            'carrierServiceId' => $this->getCarrierServiceId(),
            'orderNumber' => $this->getOrderNumber(),
            'source' => $this->getSource(),
            'addToAddressBook' => $this->getAddToAddressBook(),
            'senderAddress' => $this->getSender() ? $this->getSender()->toArray() : null,
            'receiverAddress' => $this->getReceiver() ? $this->getReceiver()->toArray() : null,
            'orderItems' => $this->getOrderItems()->toArray(),
            'orderType' => $this->getOrderType(),
            'status' => $this->getStatus(),
            'properties' => $this->getProperties()
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

    public function getCarrierId(): string
    {
        return $this->carrierId;
    }

    public function getCompanyId(): string
    {
        return $this->companyId;
    }

    public function setCompanyId(string $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    public function setCarrierId(string $carrierId): self
    {
        $this->carrierId = $carrierId;
        return $this;
    }

    public function getCarrierServiceId(): ?string
    {
        return $this->carrierServiceId;
    }

    public function setCarrierServiceId(string $carrierServiceId): self
    {
        $this->carrierServiceId = $carrierServiceId;
        return $this;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getSource(): int
    {
        return $this->source;
    }

    public function setSource(int $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getAddToAddressBook(): bool
    {
        return $this->addToAddressBook;
    }

    public function setAddToAddressBook(bool $addToAddressBook): self
    {
        $this->addToAddressBook = $addToAddressBook;
        return $this;
    }

    public function getSender(): ?Address
    {
        return $this->sender;
    }

    public function setSender(?Address $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function getReceiver(): ?Address
    {
        return $this->receiver;
    }

    public function setReceiver(?Address $receiver): self
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function getOrderItems(): OrderItems
    {
        return $this->orderItems;
    }

    public function setOrderItems(OrderItems $orderItems): self
    {
        $this->orderItems = $orderItems;
        return $this;
    }

    public function getOrderType(): int
    {
        return $this->orderType;
    }

    public function setOrderType(int $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }


    public function getProperties(): ?array
    {
        return $this->properties;
    }

    public function setProperties(?array $properties): self
    {
        $this->properties = $properties;
        return $this;
    }

}
