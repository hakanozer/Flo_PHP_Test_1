<?php

class Action
{
    public string $name = 'Emir Bilirim';
    public string $email = 'eMir@Mail.Com';

    public function sum( int $num1, int $num2 ) : int {
        $total = $num1 + $num2;
        return $total;
    }

    public function userLogin( string $username, string $password ) {
        //$arr = array( 'id' => 100, 'name' => 'Zehra Bilmem');
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
                "username": "'.$username.'",
                "password": "'.$password.'"
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        //$arr = json_decode($response, true);
        $arr = json_decode($response);
        return $arr;
    }


    public function dataArr() {
        $arr = array('user' => ['id' => 100, 'token' => 'token123']);
        return $arr;
    }

    public function stringArr() {
        $arr = array('İstanbul', 'Bursa', 'Kocaeli', 'Edirne');
        return $arr;
    }

    public function resultArr() {
        $user1 = new User('Erkan', 'erkan@mail.com');
        $user2 = new User('Serkan', 'serkan@mail.com');
        $user3 = new User('Ali', 'ali@mail.com');
        $pro1 = new Product(100, 'TV');
        $arr = array($user1, $user2, $user3);
        return $arr;
    }


    public function restCall() {
        $num1 = 1;
        $num2 = 0;
        $i = $num1 / $num2;
    }



}