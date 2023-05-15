<?php


$sql = "SELECT * FROM products ORDER BY product_id asc";

$conn = mysqli_connect("localhost", "root", "3Cv3bY8n", "products");
$result = $conn->query($sql);
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$id = substr($actual_link,strpos($actual_link, "?p=") + 3);

if ($result->num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        if ($row["product_id"] == $id){
            echo '<img class="desc-img" src="' . $row["picture"] . '">' ;
        }
    }
}
/*comment*/

$conn->close();

?>