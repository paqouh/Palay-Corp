<?php
    require 'connect.php';

    // GET 5 LATEST DATA QUERY
    $getQuery = "SELECT * FROM Product ORDER BY id DESC LIMIT 5";

    $result = mysqli_query(
        $sql,
        $getQuery
    );

    if($result){
        $rows = mysqli_fetch_all($result);

        // echo json_encode($rows);
        echo 'success';
    }
    else{
        echo "CAN'T FETCH DATA";
    }
?>