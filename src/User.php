<?php

namespace APP;

class User extends Db{

    public function getAllUsers(){

        $db = new Db();
        $pdo = $db->Connect();
        $stmt = $pdo->prepare('SELECT user, name, lastname FROM account');
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;

    }

    public function getSpecificUser($user){

        $db = new Db();
        $pdo = $db->Connect();
        $stmt = $pdo->prepare('SELECT user, name, lastname FROM account WHERE user = \''.$user.'\'');
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;

    }

}