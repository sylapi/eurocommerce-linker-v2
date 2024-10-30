<?php

declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Contracts;

use Sylapi\EurocommerceLinkerV2\Collections\Errors;

interface Validation
{
    public function addError(string $error): self;
    public function setErrors(array $errors): self;
    public function getErrors(): Errors;
    public function validate(): bool;
}