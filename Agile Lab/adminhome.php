<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #4CAF50;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        section {
            padding: 20px;
        }

        .product {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
        }

        .product-item img {
            width: 100%;
            border-radius: 5px;
        }

        .product-item h3 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Grocery Shop</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="addproduct.php">Add Products</a>
    <a href="#">Update Products</a>
    <a href="#">About Us</a>
    <a href="#">Contact Us</a>
</nav>

<section>
    <div class="product">
        <?php
        // Replace this section with PHP code to fetch and display product data
        // Example:
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "agile";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT prod_id, prod_image, prod_name, prod_price FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="product-item" id="'.$row["prod_id"].'">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($row["prod_image"]).'" alt="Product Image" style="width: '.rand(200, 300).'px;">'; // Set random width for the image
                echo '<h3>' . $row["prod_name"] . '</h3>';
                echo '<p>$' . $row["prod_price"] . '</p>';
                echo '<form action="delete_product.php" method="post">';
                echo '<input type="hidden" name="prod_id" value="'.$row["prod_id"].'">'; // Pass the actual product ID
                echo '<button type="submit">Delete Product</button>';
                echo '</form>';
                echo '<form action="updateprod.php" method="get">'; // Use GET method to pass prod_id to update_product.php
                echo '<input type="hidden" name="prod_id" value="'.$row["prod_id"].'">';
                echo '<button type="submit">Update Product</button>';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</section>

<footer>
    <p>&copy; 2024 Grocery Shop. All rights reserved.</p>
</footer>

</body>
</html>
