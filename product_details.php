<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="javascript/main.js" defer></script>
    <title>happy mugs</title>
</head>
<body>
    <section class="body-wrap">
        <header id="header">
                <a class="logo-wrap" href="index.html">
                    <img class="logo" src="img/logo_1.webp" alt="logo">
                </a>
                <a href="products1.php"> <h2>PRODUCTS1</h2> </a> 
                <a href="products2.php"> <h2 class="products-tab">PRODUCTS2</h2></a> 
            </header>
    </section>
    <article class="modal" id="js--modal">
        added to cart
    </article>
    <section class="begin">
        <div class="desc-img-wrap">
            <?php
                include 'productimg.php'
            ?>
        </div>
        <div class="begin-text">
            <?php
                include 'productname.php';
            ?>
            <?php
                include 'productprice.php'
            ?>
            <div class="circle-wrap">
            <?php
                include 'product.reccomend.php'
            ?>
        </div>
        </div>
            <a href="shoppingcart.html" class="cart-wrap">
                <img class="cart" src="img/shopping-cart.webp" alt="shopping-cart">
            </a>
    </section>
    <section class="product-desc">
        <?php
            include 'productdesc.php'
        ?>
        <button id="cart-button">
            Add to cart
        </button>
    </section>
    <footer>
        <p>made by diya jawalapersad</p>
    </footer>
</body>
</html>