<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_login_BD';


try {
$conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch (\Exception $e) {
die('Conection failed: '.$e->getMessages());
}

 ?>
