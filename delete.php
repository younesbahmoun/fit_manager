<?php
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET["id"])) {

        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $data_base = "documentation";

        // create connection 
        $connection = new mysqli($server_name, $user_name, $password, $data_base);

        // check connection
        if ($connection -> connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $id = $_GET["id"];
        $sql = "DELETE FROM clients WHERE id = $id";
        $result = $connection->query($sql);
    }

    header("location: /crud/index.php");
    exit;
// }

?>