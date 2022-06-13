<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getAllPanierG(): array
    {
        $response = $this->client->request(
            'GET',
            'https://localhost:44304/api/PanierGlobal/getall'
        );
        return $response->toArray();
    }

    public function getAllLigneG(): array
    {
        $response = $this->client->request(
            'GET',
            'https://localhost:44304/api/LigneGlobal/getall'
        );
        return $response->toArray();
    }


}