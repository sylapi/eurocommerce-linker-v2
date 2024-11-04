<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Api;

use Exception;
use GuzzleHttp\Exception\ClientException;
use Sylapi\EurocommerceLinkerV2\Entities\Order;
use Sylapi\EurocommerceLinkerV2\Helpers\ResponseError;
use Sylapi\EurocommerceLinkerV2\Exceptions\TransportException;
use Sylapi\EurocommerceLinkerV2\Entities;

class Orders
{
    private $session;

    const API_PATH = '/api/Orders';

    public function __construct($session)
    {
        $this->session = $session;
    }
    
    public function get(string $orderId): Entities\Order
    {
        try {
            $client = $this->session->client();

            $stream = $client->post(
                self::API_PATH.'/get-order-by-id',
                [
                    'debug' => $this->session->parameters()->getDebug(),
                    'headers' => $this->session->headers(),
                    'json' => [
                        'id' => $orderId,
                        'isDetails' => false
                    ]
                ]
            );

            $result = json_decode($stream->getBody()->getContents());

            if ($result === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Json data is incorrect');
            }

            return (new Response\Order($result->result))->get();
        } catch (ClientException $e) {
            throw new TransportException(ResponseError::message($e));
        } catch (Exception $e) {
            throw new TransportException($e->getMessage(), $e->getCode());
        }

    }



    public function create(Order $order): Entities\Order
    {
        if(!$order->validate()) {
            throw $order->getErrors()->createValidateException();
        }
        
        try {
            $client = $this->session->client();
            $requestOrder = (new Request\Order($order))->create();

            $stream = $client->post(
                self::API_PATH.'/create',
                [
                    'debug' => $this->session->parameters()->getDebug(),
                    'headers' => $this->session->headers(),
                    'json' => $requestOrder
                ]
            );

            $result = json_decode($stream->getBody()->getContents());

            if ($result === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Json data is incorrect');
            }

            return (new Response\Order($result->result))->get();
        } catch (ClientException $e) {
            throw new TransportException(ResponseError::message($e));
        } catch (Exception $e) {
            throw new TransportException($e->getMessage(), $e->getCode());
        }
    }


    public function transfer(array $orderIds): bool {

        try {
            $client = $this->session->client();

            $stream = $client->post(
                self::API_PATH.'/transfer-wms',
                [
                    'debug' => $this->session->parameters()->getDebug(),
                    'headers' => $this->session->headers(),
                    'json' => ['orderIds' => $orderIds],
                ]
            );

            $result = json_decode($stream->getBody()->getContents());

            if ($result === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Json data is incorrect');
            }

            return $result->isSuccess === true;
        } catch (ClientException $e) {
            throw new TransportException(ResponseError::message($e));
        } catch (Exception $e) {
            throw new TransportException($e->getMessage(), $e->getCode());
        }
    }
}