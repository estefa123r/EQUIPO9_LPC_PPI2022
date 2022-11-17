<?php

$server = 'sql207.epizy.com';
$username = 'epiz_33009309';
$password = '0PyNAq6VErV';
$database = 'epiz_33009309_biblioteca';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
