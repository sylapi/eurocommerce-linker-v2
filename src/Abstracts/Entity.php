<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Abstracts;

use Sylapi\EurocommerceLinkerV2\Contracts\Validation;
use stdClass;

abstract class Entity extends stdClass implements Validation
{
    abstract public function validate(): bool;
}
