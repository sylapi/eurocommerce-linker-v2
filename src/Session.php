<?php

declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2;

use GuzzleHttp\Client;

class Session
{
    private $parameters;
    private $client;
    private $token;

    public function __construct(Parameters $parameters)
    {
        $this->parameters = $parameters;
        $this->client = null;
    }

    public function client(): ?Client
    {
        if (!$this->client) {
            $this->initializeSession();
        }

        return $this->client;
    }


    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function headers()
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        if($this->token) {
            $headers['Authorization'] = 'Bearer '.$this->token;
        }

        return $headers;
    }

    private function initializeSession(): void
    {
        if($this->getToken() === null) {
            $this->login();
        }

        $this->client = new Client([
            'base_uri' => $this->parameters->getApiUrl(),
            'headers'  => $this->headers()
        ]);
    }

    private function login(): self
    {
        $client = new Client([
            'base_uri' => $this->parameters->getApiUrl(),
            'headers'  => $this->headers()
        ]);
        
        $response = $client->post('/api/auth/token', [
            'json' => [
                'email' => $this->parameters()->getLogin(),
                'password' => $this->parameters()->getPassword(),
                'token_name' => $this->parameters()->getTokenName() ?? 'integration-script',
            ]
        ]);

        $content = json_decode($response->getBody()->getContents());

        $this->setToken($content?->access_token);
        return $this;
    }

    public function parameters(): Parameters
    {
        return $this->parameters;
    }
}
