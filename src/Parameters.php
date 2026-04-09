<?php

declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2;

use ArrayObject;
use Sylapi\EurocommerceLinkerV2\Contracts\Validation;
use Sylapi\EurocommerceLinkerV2\Traits\Validatable;

/**
 * @method string getApiUrl()
 * @method string setApiUrl(string $value)
 * @method string getCompanyId()
 * @method string setCompanyId(string $value)
 * @method string getLogin()
 * @method string setLogin(string $value)
 * @method string getPassword()
 * @method string setPassword(string $value)
 * @method string getDebug()
 * @method string setDebug(bool $value)
 * @method ?string getTokenName()
 * @method string setTokenName(string $value)
 */
class Parameters extends ArrayObject implements Validation 
{
    use Validatable;
    
    public static function create(array $parameters): self
    {
        return new self($parameters, ArrayObject::ARRAY_AS_PROPS);
    }


    public function validate(): bool
    {
        $validation = $this->validator()->validate(
            (array) $this,
            [
                'login' => 'required',
                'password' => 'required',
            ]
        );

        $validation->validate();

        if ($validation->fails()) {
            $this->setErrors($validation->errors()->toArray());
            return false;
        }

        return true;
    }


    public function __call($method, $arguments)
    {
        if(preg_match("/^(get|set)/", $method)) {
            $response = null;
            $property = $this->propertyNameByMethod($method);
            if(preg_match("/^(get)/", $method)) {
                $response = $this->{$property} ?? null;
            } else {
                $this->{$property} = $arguments[0] ?? null;
                $response = $this;
            }
            return $response;
        } 
    }

    private function propertyNameByMethod(string $method): string
    {
        return lcfirst(str_replace(['get','set'], '', $method));
    }
}