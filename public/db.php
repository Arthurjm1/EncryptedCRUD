<?php

require_once "../vendor/autoload.php";

use App\Connection;

$db = Connection::getDb();

$query = 'create table users (id int not null primary key auto_increment, userDocument varchar(250), creditCardToken varchar(250), value float)';
$stmt = $db->prepare($query);
$stmt->execute();