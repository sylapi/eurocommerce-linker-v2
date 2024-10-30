<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use Sylapi\EurocommerceLinkerV2\Collections\Products as ProductsCollection;

class Products
{
    private $result;

    function __construct(array $result)
    {
        $this->result = $result;
    }

    public function get(): ProductsCollection
    {
        $products = new ProductsCollection();
        foreach($this->result as $result)
        {
            $products->add(
                (new Product($result))->get()
            );
        }
        return $products;
    }
}