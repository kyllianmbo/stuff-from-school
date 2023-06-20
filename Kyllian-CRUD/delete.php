<?php
if ( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud";


$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM crud WHERE id=$id";
$connection->query($sql);
}

header("location: /Kyllian-CRUD/index.php");
exit;
?>