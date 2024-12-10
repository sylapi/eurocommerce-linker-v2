<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use stdClass;

use Sylapi\EurocommerceLinkerV2\Entities\Order as OrderEntity;

class Order
{
    private $result;

    function __construct(stdClass $result)
    {
        $this->result = $result;
    }

    public function get(): OrderEntity
    {
        $order = new OrderEntity;
        $order->setId($this->result->id);

        if(isset($this->result->status)) {
            $order->setStatus($this->result->status);
        }

        return $order;
    }
}