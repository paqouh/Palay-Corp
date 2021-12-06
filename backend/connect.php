<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "palay";

    $sql = mysqli_connect($host, $user, $password, $db) or die("FK".mysqli_connect_error());
?>