<?php
if (isset($_GET["id"])) {
    require "../connection.php";
    $id = $_GET["id"];
    $sql = "DELETE FROM cours WHERE cours_id = $id";
    $result = $connection->query($sql);
}

header("location: /fit_manager/cours/cours.php");
exit;

?>