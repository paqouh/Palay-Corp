<?php
    require 'backend/connect.php';
    $sel = "SELECT * FROM user WHERE fname='$fname'";

        $que = mysqli_query($sql, $sel);


        if(mysqli_num_rows($que) < 1){
            $output = "No Values";
            echo $output;
        }

        while ($row  = mysqli_fetch_array($que)){
            
            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $pass = $row['pass'];
            $user_address = $row['user_address'];
            $city = $row['city'];
            $postal_code = $row['postal_code'];
            $country = $row['country'];
            $telephone_number = $row['telephone_number'];
            $mobile_number = $row['mobile_number'];
            
            // $profile_image .= "<img src='".$row['profile_image']."' style='width:50px;height:50px;'>";

            $profile = $row['profile_image'];
            
    }
?>