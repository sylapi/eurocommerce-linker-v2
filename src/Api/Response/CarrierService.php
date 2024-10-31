<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use stdClass;
use Sylapi\EurocommerceLinkerV2\Entities\CarrierService as CarrierServiceEntity;

class CarrierService
{
    private $result;

    function __construct(stdClass $result)
    {
        $this->result = $result;
    }

    public function get(): CarrierServiceEntity
    {
        $carrier = new CarrierServiceEntity;
        $carrier->setId($this->result->id);
        $carrier->setName($this->result->name);
        return $carrier;
    }
}