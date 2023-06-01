<?php


$sql = "SELECT * FROM products ORDER BY product_id asc";

$conn = mysqli_connect("localhost", "root", "3Cv3bY8n", "products");
$result = $conn->query($sql);
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$id = substr($actual_link,strpos($actual_link, "?p=") + 3);

$array = array(16, 17, 18, 19, 20, 21, 22, 23, 24, 25);

$x = 3;

$in = false;

for ($i = 0; $i < count($array); $i = $i + 1) { /*counts everything in de array*/
    if ($array[$i] == $id) { /*checks if the array is equal to the id*/
        $in = true; /*if the above it's true then in is true*/
    }
}

if ($in == true) { /*if it's true it preforms all of underneath*/
    for ($i = 0; $i < count($array); $i = $i + 1) { /*counts everything in the array*/
        if ($i < $x) { /*if x is bigger then it preforms all underneath*/
            $sql = "SELECT * FROM products ORDER BY product_id asc";

            $conn = mysqli_connect("localhost", "root", "3Cv3bY8n", "products");
            $result = $conn->query($sql);
            $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            $id = substr($actual_link,strpos($actual_link, "?p=") + 3);
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    if ($row["product_id"] == $array[$i]){/*preforms this if the row is equal to the array*/
                        if ($array[$i] == $id) { //checks if the product is already displayed and skips over that id
                            $x = $x + 1; //this makes it so it shows up 3 times
                        }
                        else{
                            echo '<a href="' . "product_details.php?p=". $array[$i] .  '" class="circle"> <img class="circle-img" src="' . $row["picture"] . '"> </a>';
                        }
                    }
                }   
            }
            $conn->close();
        }
    }
}

//comment



?> 