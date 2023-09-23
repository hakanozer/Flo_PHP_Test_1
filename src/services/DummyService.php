<?php
use GuzzleHttp\Client;

class DummyService
{

    /**
     * @var Client
     */
    private $client = null;
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://dummyjson.com/'] );
    }

    public function login( string $username, string $password ) {
        $response = $this->client->post('auth/login', [
            'form_params' => [
                'username' => $username,
                'password' => $password
            ]
        ]);
        return $response;
    }


}