<?php

    require 'backend/session.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
    <link rel="stylesheet" href="account.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script>
        function test(){
            // fname, lname, email, pass, user_address, city, postal_code, country, telephone_number, mobile_number

            var fname = document.getElementById('fname').value;
            var lname = document.getElementById('lname').value;
            var pass = document.getElementById('pass').value;
            var user_address = document.getElementById('user_address').value;
            var city = document.getElementById('city').value;
            var postal_code = document.getElementById('postal_code').value;
            var country = document.getElementById('country').value;
            var telephone_number = document.getElementById('telephone_number').value;
            var mobile_number = document.getElementById('mobile_number').value;
            
            // $.ajax({
            //     type: 'POST',
            //     url: 'backend/user.php',
            //     datatype: 'json',
            //     contentType: 'application/json; charset=utf-8',
            //     data: JSON.stringify({
            //         fname: fname,

            //     }),
            //     success: function(data)
            //     {
            //         var parsedData = jQuery.parseJSON(data);

            //         document.getElementById("id-value").innerHTML = parsedData[0];
            //         document.getElementById("email-value").innerHTML = parsedData[1];
            //         document.getElementById("password-value").innerHTML = parsedData[2];
            //     }
            // });
            
            window.location.href="account.php";
        }
    </script> -->

    <style>
        #account-info-container{
            display: flex;
            width: 100%;
            height: 50px;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
        }

        #edit-btn{
            background-color: green;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="top-nav">
            <div class="left">
                <select name="language" class="language">
                    <option value="English">English</option>
                    <option value="Filipino">Filipino</option>
                </select>
                <select name="currency" class="currency">
                    <option value="Dollar">Dollar</option>
                    <option value="Peso">Peso</option>
                </select>
            </div>
            <div class="right">
                <li><a href="#">My account</a></li>
                <li><a href="#">Wishlist</a></li>
                <li><a href="#">Checkout</a></li>
            </div>
        </div>

 <!-----------------------Navigation--------------------------------->

        <div class="navigation">
            <div class="logo">
                <img src="images/agri-icon.png" alt="logo">
                <h3>Palay <span>CORP</span></h3>
            </div>
            <div class="nav-content">
                <div class="search">
                    <form action="">
                    <input type="search" placeholder="Search here">
                    <button type="submit"><ion-icon name="search"></ion-icon></button>
                    </form>
                </div>
                <div class="nav-links">
                    <li><a href="http://localhost:4000/palayCorp/main.php">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Items</a></li>
                </div>
            </div>
            <div class="cart">
                <i class='bx bx-cart'></i>
                <div class="cart-details">
                    <h5>Shopping Cart</h5>
                    <p> 0 Items - $0.00 </p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="side-nav">
                <div class="profile">
                    <div class="img"></div>
                    <div class="details">
                        <h4><?php echo $fname . " " . $lname?></h4>
                        <p><a href="#"><i class='bx bx-edit' ></i> Edit profile</a></p>
                    </div>
                </div>
                <div class="side-nav-links">
                    <li data-nav="1">
                        <i class='bx bxs-user-account'></i>
                        <a href="#">My Account</a>
                    </li>
                    <li data-nav="2"><i class='bx bx-notepad' ></i><a href="#">My Purchase</a></li>
                    <li data-nav="3"><i class='bx bx-notification' ></i><a href="#">Notifications</a></li>
                    <li data-nav="4"><i class='bx bxs-bank'></i><a href="#">Banking</a></li>
                    <li data-nav="5"><i class='bx bx-money' ></i><a href="#">Investment</a></li>
                </div>
            </div>


<!----------------------------My Account ---------------------------------------->

            <div class="content-info active" data-main-content="1">
                <div class="account-profile">
                    <div class="profile-title">
                        <h3>My Profile</h3>
                        <p>Manage and protect your profile</p>
                    </div>
                    <div class="profile-content">
                        <div class="profile-content-left">


                        <form action="#" method="POST" enctype="multipart/form-data">
                                <div id="account-info-container">
                                <h5>Account Information Setup</h5>
                                <!-- <button onclick="test()">Clicken</button> -->
                                <button name="submit" id="edit-btn">Apply</button>
                                </div>
                               
                                <!-- <input type="submit" name="submit" value="Apply"> -->
                                <br><br>
                                <div class="profile-row">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" id="fname">
                                </div>

                                <div class="profile-row">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname">
                                </div>
                                <div class="profile-row">
                                    <label for="">Email</label>
                                    <input type="text" name="email">
                                </div>
                                <div class="profile-row">
                                    <label for="">Address</label>
                                    <input type="text" name="user_address">
                                </div>
                                <div class="profile-row">
                                    <label for="">City</label>
                                    <input type="text" name="city">
                                </div>
                                <div class="profile-row">
                                    <label for="">Postal Code</label>
                                    <input type="text" name="postal_code">
                                </div>
                                <div class="profile-row">
                                    <label for="">Country</label>
                                    <input type="text" name="country">
                                </div>
                                <div class="profile-row">
                                    <label for="">Password</label>
                                    <input type="password" name="pass">
                                </div>
                                <div class="profile-row">
                                    <label for="">Telephone Number</label>
                                    <input type="text" name="telephone_number">
                                </div>  
                                <div class="profile-row">
                                    <label for="">Mobile Number</label>
                                    <input type="text" name="mobile_number">
                                </div>
                                <span>INSERT IMAGE<input type="file" name="my_image"></span>
                                </form>
                                </div>
                                <div class="profile-content-right">
                                <i class='bx bxs-user'></i>
                                <span>INSERT IMAGE<input type="file" name="my_image"></span>
                                </div>
                        
                    </div>
                </div>
            </div>
            
<!----------------------------My Purchase ---------------------------------------->


            <div class="content-info" data-main-content="2">
                <div class="content-slide purchase">
                    <div class="purchase-header">
                        <li class="purchase-links active" data-link ="1"><a href="#">All</a></li>
                        <li class="purchase-links" data-link ="2"><a href="#" >To Pay</a></li>
                        <li class="purchase-links" data-link ="3"><a href="#" >To Ship</a></li>
                        <li class="purchase-links" data-link ="4"><a href="#" >To Receive</a></li>
                        <li class="purchase-links" data-link ="5"><a href="#">Completed</a></li>
                        <li class="purchase-links" data-link ="6"><a href="#" >Cancelled</a></li>
                    </div>
                    <div class="purchase-content active" data-content="1">
                        <h2>All</h2>
                    </div>
                    <div class="purchase-content" data-content="2">
                        <h2>To Pay</h2>
                    </div>
                    <div class="purchase-content" data-content="3">
                        <h2>To Ship</h2>
                    </div>
                    <div class="purchase-content" data-content="4">
                        <h2>To Receive</h2>
                    </div>
                    <div class="purchase-content" data-content="5">
                        <h2>Completed</h2>
                    </div>
                    <div class="purchase-content" data-content="6">
                        <h2>Cancelled</h2>
                    </div>
                </div>
            </div>

<!----------------------------My Notifications ---------------------------------------->

            <div class="content-info" data-main-content="3">
                <div class="notifications">
                    <div class="notifications-title">
                        <h4>Notifications</h4>
                    </div>

                </div>
            </div>


<!---------------------------- Banking  ---------------------------------------->


            <div class="content-info" data-main-content="4">
                <div class="banking">
                    <div class="banking-title">
                        <h4>Banking</h4>
                    </div>
                </div>
            </div>

<!----------------------------Investment ---------------------------------------->


            <div class="content-info" data-main-content="5">
                <div class="investment">
                    <div class="investment-title">
                        <h4>Investment</h4>
                    </div>
                </div>
            </div>

        </div>  
    </header>
    
    <script src="javascript/purchase.js"></script>
    <script src="javascript/accountNavigator.js"></script>
</body>
</html>

<?php 

require_once 'backend/connect.php';

if(isset($_POST['submit'])){

    $file = $_FILES['my_image']['name'];


    $query = "UPDATE `user` 
    SET fname='$_POST[fname]' , 
    lname='$_POST[lname]', 
    email='$_POST[email]' ,  
    user_address='$_POST[user_address]' ,  
    city='$_POST[city]' ,  
    postal_code='$_POST[postal_code]' ,  
    country='$_POST[country]' ,  
    telephone_number='$_POST[telephone_number]' , 
    mobile_number='$_POST[mobile_number]',
    profile_image='$file' 
    WHERE fname='$fname'";

    $query_run = mysqli_query($sql,$query);

    if($query_run){

        move_uploaded_file($_FILES['my_image']['tmp_name'], "$file");

        echo "<a href='account.php'>Account</a>";

        // echo "<script>window.location.href = 'account.php';</script>";
        // echo "Hello";
        // echo '<script type="text/javascript> window.location.href="account.php" </script>';
        
    }else {
    echo '<script type="text/javascript> alert("Error!") </script>';
    }
}
?>