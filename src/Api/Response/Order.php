<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use stdClass;
use Sylapi\EurocommerceLinkerV2\Entities\Delivery;
use Sylapi\EurocommerceLinkerV2\Entities\Position;
use Sylapi\EurocommerceLinkerV2\Entities\OrderParcel;
use Sylapi\EurocommerceLinkerV2\Collections\Positions;
use Sylapi\EurocommerceLinkerV2\Collections\OrderParcels;
use Sylapi\EurocommerceLinkerV2\Entities\OrderAttachment;
use Sylapi\EurocommerceLinkerV2\Collections\OrderAttachments;
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

            
        return $order;
    }
}