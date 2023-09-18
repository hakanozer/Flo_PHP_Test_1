<?php

class ResultData
{

    public function __construct()
    {
    }

    public function result() {
        //$arr = array('id' => 100, 'name' => 'Zehra Bilsin');
        //return $arr;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://dummyjson.com/auth/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                "username": "kminchelle",
                "password": "0lelplR"
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function stringData() {
        return "Zehra Bilmem";
    }

    public function dataArr() {
        return ['İstanbul', 'Ankara', 'Hatay', 'Adıyaman', 30];
    }

    public function arrControl() {
        $arr = array('user' => ['id' => 100, 'name' => 'Ali Bilmem']);
        return $arr;
    }

    public function userArr() {
        $arr = [ new User(), new User() ];
        return $arr;
    }

    public function emailAddress() {
       return "ali@mail.com";
    }


}