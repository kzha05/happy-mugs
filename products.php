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
            <img class="logo" src="img/logo_1.webp" alt="logo">
            <a href="index.html"> <h2>HOME</h2> </a> 
            <a href="products.php"> <h2 class="products-tab">PRODUCTS</h2></a> 
        </header>
    </section>
    <?php
    include 'db_connection.php';

    $conn = OpenCon();

    echo "Connected Successfully";

    CloseCon($conn);

    ?>
    <footer>
        <p>made by diya jawalapersad</p>
    </footer>
</body>
</html>