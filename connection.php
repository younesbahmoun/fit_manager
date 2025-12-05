<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$data_base = "salle_sport";

// create connection 
$connection = new mysqli($server_name, $user_name, $password, $data_base);

// check connection
if ($connection -> connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>