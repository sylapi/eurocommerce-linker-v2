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
        $order->setId($this->result->id ?? null);
        $order->setCarrierId($this->result->carrierId ?? null);
        $order->setCompanyId($this->result->companyId ?? null);
        $order->setCarrierServiceId($this->result->carrierIntegrationServiceId ?? null);
        $order->setOrderNumber($this->result->orderNumber ?? null);
        $order->setSource($this->result->source ?? null);
        $order->setStatus($this->result->status ?? null);

        return $order;
    }
}