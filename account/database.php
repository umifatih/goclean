<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "goclean_db";

$db = mysqli_connect ($hostname, $username, $password, $database);

if ($db->connect_error){
    echo "knoeksi database rusak";
    die ("error!");
}

?>