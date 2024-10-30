<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use Sylapi\EurocommerceLinkerV2\Collections\ProductStocks as ProductStocksCollection;

class ProductStocks
{
    private $result;

    function __construct(array $result)
    {
        $this->result = $result;
    }

    public function get(): ProductStocksCollection
    {
        $products = new ProductStocksCollection();
        foreach($this->result as $result)
        {
            $products->add(
                (new ProductStock($result))->get()
            );
        }
        return $products;
    }
}