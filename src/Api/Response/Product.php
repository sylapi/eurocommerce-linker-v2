<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api\Response;

use stdClass;
use Sylapi\EurocommerceLinkerV2\Entities\Product as ProductEntity;

class Product
{
    private $result;

    function __construct(stdClass $result)
    {
        $this->result = $result;
    }

    public function get(): ProductEntity
    {
        $product = new ProductEntity;
        $product->setId($this->result->id)
            ->setRefId($this->result->refid)
            ->setAdditionalId((int) $this->result->additionalId)
            ->setSku($this->result->sku)
            ->setCode128($this->result->code128)
            ->setEan($this->result->ean)
            ->setName($this->result->name)
            ->setActive($this->result->active)
            ->setWeight($this->result->weight)
            ->setLength($this->result->length)
            ->setWidth($this->result->width)
            ->setHeight($this->result->height);
        return $product;
    }
}