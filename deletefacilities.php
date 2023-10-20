<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "wcurds";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM facilities WHERE id=$id";
    $connection->query($sql);
}

header("location: /wcurds/facilities.php");
exit;
?>