<?php

require __DIR__ . '/../vendor/autoload.php'; 

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__)); 
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$name = $_ENV['DB_NAME'];

$conn = mysqli_connect($host, $user, $pass, $name);

if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

?>