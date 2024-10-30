<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Abstracts\Entity;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;
use Sylapi\EurocommerceLinkerV2\Collections\OrderItems;

class Order extends Entity
{
    use Validatable;

    private ?int $id;
    private string $carrierId;
    private string $orderNumber;
    private int $source;
    private bool $addToAddressBook = false;
    private ?Address $sender;
    private ?Address $receiver;
    private OrderItems $orderItems;
    private int $orderType;
    private int $status;



    
    public function validate(): bool
    {
        $rules = [
            'id' => 'nullable|integer',
            'carrierId' => 'required|string|max:100',
            'orderNumber' => 'required|string|max:100',
            'source' => 'required|integer',
            'addToAddressBook' => 'required|boolean',
            'sender' => 'nullable',
            'receiver' => 'nullable',
            'orderItems' => 'required',
        ];

        $data = $this->toArray();
        return $this->validateHandle($data, $rules);
    }




    public function toArray()
    {
        return [
            
        ];
    }


}
