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
        if(isset($data['positions']) && is_array($data['positions'])) {
            $positions = $data['positions'];
            $positions = array_map(function($item) {
                $refId = $item['refId'];
                unset($item['refId']);
                $item['refid'] = $refId;
                return $item;
            },  (array) $positions);

            $data['positions'] = $positions;
        }

        var_dump($data);

        return $data;
    }

    public function update(): array
    {
        $data = $this->order->toArray();
        if(isset($data['positions']) && is_array($data['positions'])) {
            $positions = $data['positions'];
            $positions = array_map(function($item) {
                $refId = $item['refId'];
                unset($item['refId']);
                $item['refid'] = $refId;
                return $item;
            },  (array) $positions);

            $data['positions'] = $positions;
        }        
        return $data;
    }
}