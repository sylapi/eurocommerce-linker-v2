<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use Sylapi\EurocommerceLinkerV2\Collections\CarrierServices as CarrierServicesCollection;

class CarrierServices
{
    private $result;

    function __construct(array $result)
    {
        $this->result = $result['result'] ?? [];
    }

    public function get(): CarrierServicesCollection
    {
        $carriers = new CarrierServicesCollection();

        foreach($this->result as $result)
        {
            $carriers->add(
                (new Carrier($result))->get()
            );
        }
        return $carriers;
    }
}