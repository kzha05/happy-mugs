<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="javascript/main.js"></script>
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

        <section class="template">
            <?php
            include 'connect_db.php';
            
            ?>
        </section>
    <footer>
        <p>made by diya jawalapersad</p>
    </footer>
</body>
</html>