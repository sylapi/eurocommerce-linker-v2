<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2;

use Sylapi\EurocommerceLinkerV2\Entities\Make;

class Api
{

    public function __construct(
        private Api\Orders $orders,
        private Api\Carriers $carriers,
        private Entities\Make $make
    ) {

    }

    public function make(): Make
    {
        return $this->make;
    }

    public function orders(): Api\Orders
    {
        return $this->orders;
    }
    
    
    public function carriers(): Api\Carriers
    {
        return $this->carriers;
    }
}
