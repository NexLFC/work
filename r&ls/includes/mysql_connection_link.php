<?php
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_NAME','r&ls');

$dbcl = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($dbcl->connection_error){
    die('Could not connect to MySQL: '.$dbcl->connect_error);
}else{
    $dbcl->set_charset('utf8');
}
