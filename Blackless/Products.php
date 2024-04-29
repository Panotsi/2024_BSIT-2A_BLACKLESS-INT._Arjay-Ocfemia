<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce Website</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>

    <?php

        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "blackless(2)";
        $db_conn = "";

        $conn = mysqli_connect($db_server,
                                $db_user,
                                $db_pass,
                                $db_name);

    ?>

    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Franks Cafe</h2>
        <div class="products">
            <div class="product">
                <img src="coffee/product1.jpg" alt="Product 1">
                <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 1";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }
                    
                ?>
            </div>
            <div class="product">
                <img src="coffee/product2.jpg" alt="Product 2">
                <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 2";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }    
                ?>
            </div>
            <div class="product">
                <img src="coffee/product3.jpg" alt="Product 3">
                <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 4";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }    
                ?>
            </div>
            <div class="product">
                <img src="coffee/product4.jpg" alt="Product 4">
                <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 5";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }    
                ?>
            </div>
            <div class="product">
            <img src="coffee/Product5.jpg" alt="Product 5">
            <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 6";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }    
                ?>
            </div>
            <div class="product">
            <img src="coffee/Product6.jpg" alt="Product 6">
            <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 7";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }    
                ?>
            </div>
            <div class="product">
                <img src="coffee/Product7.jpg" alt="Product 7">
                <?php
                    $sql = "SELECT * FROM menu WHERE item_id = 8";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<h3>" . $row["item_name"] . "</h3>";
                            echo "<p>" . $row["price_hot_8oz"] . " Pesos</p>";
                            echo "<button>Add to Cart</button>";
                        }
                    } else {
                        echo "0 results";
                    }    
                ?>
            </div>
            <!-- More products go here -->
        </div>
    </div>
    
</body>
</html>