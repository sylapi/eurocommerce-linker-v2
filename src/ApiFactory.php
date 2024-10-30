<?php

declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2;

class ApiFactory
{
    private $sessionFactory;

    public function __construct(SessionFactory $sessionFactory)
    {
        $this->sessionFactory = $sessionFactory;
    }

    public function create(Parameters $parameters)
    {
        $session = $this->sessionFactory
                    ->session($parameters);

        return new Api(
            new Api\Orders($session),
            new Api\Carriers($session),
            new Entities\Make()
        );
    }
}
