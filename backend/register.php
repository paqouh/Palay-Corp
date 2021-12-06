<?php
    require 'connect.php';

    if(isset($_POST['password']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])){
        $email = $_POST['email'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
            
            // CREATE TABLE QUERY
            $createTableQuery = "CREATE TABLE User (id INT(10) AUTO_INCREMENT PRIMARY KEY, fname VARCHAR(30) NOT NULL, lname VARCHAR(30) NOT NULL, email VARCHAR(30) NOT NULL, pass VARCHAR(200) NOT NULL, user_address VARCHAR(100), city VARCHAR(100), postal_code INT(4), country VARCHAR(100), telephone_number VARCHAR(100), mobile_number VARCHAR(100), profile_image VARCHAR(100))";

            // CREATE Table ADDRESS
            // $createTableAddressQuery = "CREATE TABLE UserAddress (id INT(10) AUTO_INCREMENT PRIMARY KEY, user_id INT(10), user_address VARCHAR(100), city VARCHAR(100), postal_code INT(4), country VARCHAR(100), telephone_number VARCHAR(100), mobile_number VARCHAR(100), FOREIGN KEY (user_id) REFERENCES User(id))";

            // CREATE USER QUERY
            $createUserQuery = "INSERT INTO User (fname, lname, email, pass, user_address, city, postal_code, country, telephone_number, mobile_number, profile_image) VALUES ('".$fname."', '".$lname."','".$email."', '".$pass."', '', '', 0, '', '', '', '')";


            mysqli_query(
                $sql,
                $createTableQuery
            );  

            $resultQuery = mysqli_query(
                $sql,
                $createUserQuery
            );

            if($resultQuery){
                $message = "Login Success!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else{
                $message = "Login Error!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo $sql -> error;
            }
    }
    else{
        echo "";
    }
