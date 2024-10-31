<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Sylapi\EurocommerceLinkerV2\Helpers\ResponseError;
use Sylapi\EurocommerceLinkerV2\Exceptions\TransportException;

class CarrierServices
{
    private $session;

    public function __construct($session)
    {
        $this->session = $session;
    }

    public function all()
    {
        try {
            $client = $this->session->client();

            $stream = $client->get(
                '/api/CarrierServices/get-all',
                [
                    'debug' => $this->session->parameters()->getDebug()
                ]
            );
            $result = json_decode($stream->getBody()->getContents());

            if ($result === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Json data is incorrect');
            }
            return (new Response\CarrierServices((array) $result))->get();
        } catch (ClientException $e) {
            throw new TransportException(ResponseError::message($e));
        } catch (Exception $e) {
            throw new TransportException($e->getMessage(), $e->getCode());
        }   
    }    

}