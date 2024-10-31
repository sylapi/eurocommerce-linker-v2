<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Request;

use Sylapi\EurocommerceLinkerV2\Entities\Order as OrderEntity;

class Order
{
    private $order;

    function __construct(OrderEntity $order)
    {
        $this->order = $order;
    }

    public function create(): array
    {
        $data = $this->order->toArray();
        unset($data['id']);

        return $data;
    }
}