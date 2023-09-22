<?php

class Database
{

    private $_conn = null;

    public function getConnection() {
        if( !is_null($this->_conn) ) {
            return $this->_conn;
        }
        try {
            $this->_conn = new PDO('mysql:host=127.0.0.1;port=8889;dbname=php_test_1', 'root', 'root');
            return $this->_conn;
        }catch (PDOException $ex) {
            print 'PDO Error :'. $ex->getMessage();
        }
        return $this->_conn;
    }


}