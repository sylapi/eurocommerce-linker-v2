<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Entities;

use Sylapi\EurocommerceLinkerV2\Collections\OrderItems;



class Make
{
 
    public function address(): Address
    {
        return new Address;
    }

    public function order(): Order
    {
        return new Order;
    }

    public function orderItem(): OrderItem
    {
        return new OrderItem;
    }

    public function orderItems(): OrderItems
    {
        return new OrderItems;
    }

}
