<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'itc_admin';

return new PDO("mysql:host=$host;dbname=$db", $user, $pass);