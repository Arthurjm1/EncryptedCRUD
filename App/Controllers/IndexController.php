<?php

namespace App\Controllers;

use App\Connection;
use App\Encrypter;
use App\Models\User;
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action{    

    public function index(){ 
        $this->view->page = 'index';        
        $this->render('layout');
    }

    public function encrypt(){
        
        $userDocument = Encrypter::encrypt($_POST['document']);
        $creditCardToken = Encrypter::encrypt($_POST['creditCard']);
        $value = $_POST['value'];

        $db = Connection::getDb();
        $user = new User;
        $user->__set('userDocument', $userDocument)->__set('creditCardToken', $creditCardToken)->__set('value', $value);
        $user->cadastra($db);   

        header('Location: /?acao=sucesso');
    }
}