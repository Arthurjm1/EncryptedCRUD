<?php

namespace App\Models;

class User{

    private $id;
    private $userDocument;
    private $creditCardToken;
    private $value;

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $value){
        $this->$attr = $value;
        return $this;
    }

    public function cadastra($db){   
        $query = 'insert into users (userDocument, creditCardToken, value) values (:userDocument, :creditCardToken, :value)';
        $stmt = $db->prepare($query);
        $stmt->bindValue(':userDocument', $this->userDocument);
        $stmt->bindValue(':creditCardToken', $this->creditCardToken);
        $stmt->bindValue(':value', $this->value);
        $stmt->execute();

        return true;
    }

}