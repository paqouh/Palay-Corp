<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="product.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/agri-icon.png" alt="logo">
            <h3>Palay <span>CORP</span></h3> 
        </div>
    </header>
    <div class="product-content">
        <div class="product-img-small">
            <span><img src="images/rice-grain1.jpg" alt=""></span>
            <span><img src="images/rice-grain2.jpg" alt=""></span>
            <span><img src="images/rice-grain3.jpg" alt=""></span>
            <span><img src="images/rice-grain4.jpg" alt=""></span>
        </div>
        <div class="product-img-big">
            <img src="images/dinorado25kg.png" alt="">
        </div>
        <div class="product-information">
            <h4 class="product-name">Dinorado</h4>
            <span class="product-rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </span>
            <h4 class="product-price">P 899</h4>
            <div class="product-attributes">
                <select name="" id="">
                    <option value="">25 kg</option>
                    <option value="">50 kg</option>
                </select>
               
            </div>
            <p class="product-description">Dinorado in Philippine Market that has a variety of un-husked rice that is very aromatic and usually more expensive than other rice varieties from the Philippines</p>
            <div class="product-actions">
                <div class="quantity">
                    <button class="minus">-</button>
                    <input type="text" value="1">
                    <button class="plus">+</button>
                </div>
                <button class="add-to-cart"><i class='bx bx-cart-alt' ></i>   Add to cart</button>
                <button class="add-to-wishlist"><i class='bx bx-plus'></i>   Add to wishlist</button>
            </div>
        </div>
    </div>
</body>
</html>