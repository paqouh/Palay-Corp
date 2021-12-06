<?php
    require 'connect.php';
    require 'session.php';

    $imageQuery = "SELECT * FROM User WHERE id = '.$id.' LIMIT 1";

    $result = mysqli_query(
        $sql,
        $imageQuery
    );

    if($result){
        $data = mysqli_fetch_array($result);

        echo json_encode($data['profile_image']);
    }
?>