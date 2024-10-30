<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use Sylapi\EurocommerceLinkerV2\Collections\Carriers as CarriersCollection;

class Carriers
{
    private $result;

    function __construct(array $result)
    {
        $this->result = $result['result'] ?? [];
    }

    public function get(): CarriersCollection
    {
        $carriers = new CarriersCollection();

        foreach($this->result as $result)
        {
            $carriers->add(
                (new Carrier($result))->get()
            );
        }
        return $carriers;
    }
}