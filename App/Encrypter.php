<?php

namespace App;

class Encrypter{

    public static function encrypt($string){
        return hash('sha512', $string);
    }
}