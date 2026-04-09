<?php

declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Helpers;

use GuzzleHttp\Exception\ClientException;

class ResponseError
{

    const DEFAULT_MESSAGE = 'Something went wrong!';

    public static function message(ClientException $e): string
    {
        $message = '';

        $response = $e->getResponse()->getBody()->getContents();
        $response = json_decode($response);

        if(isset($response->errors) && is_object($response->errors)) {
            $parts = [];
            foreach($response->errors as $field => $messages) {
                $parts[] = $field.': '.implode(' ', (array)$messages);
            }
            $message = implode(' | ', $parts);
        } 
        

        $code = $e->getResponse()->getStatusCode();

        $responseMessage = null;

        if($code) {
            $responseMessage = $code.' ';
        }

        if($message) {
            $responseMessage .= $message;
        }

        return $responseMessage ?? self::DEFAULT_MESSAGE;
    }
}