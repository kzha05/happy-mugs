   <?php


    $sql = "SELECT * FROM products ORDER BY product_id asc";

    $conn = mysqli_connect("localhost", "root", "3Cv3bY8n", "products");
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo '<a href="product_details.php?p=' . $row["product_id"] . '"class="card" data-category="' . $row["type"]. '" data-price="' . $row["price"]. '"> <div class="card-img-wrap"> <img class="card-img" src="' . $row["picture"] . '">' . ' </div> <h2>' . $row["name"] . '</h2> <h3>€' . $row["price"] .'</h3> </a>';
        
        }
    }

    /*comment*/

    $conn->close();
    
    ?>