<?php 

namespace APP;

class Db{

    public $host;
    public $dbname;
    public $username;
    public $password;

    public function __construct(){

        $this->host = '';
        $this->dbname = '';
        $this->username = '';
        $this->password = '';

    }

    public function Connect(){
        return new \PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    }

}