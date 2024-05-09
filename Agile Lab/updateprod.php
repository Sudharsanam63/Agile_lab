<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Details</title>
</head>
<body>
    <h2>Update Product Details</h2>
    <?php
    // Fetch the product details based on the prod_id
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

    if(isset($_GET['prod_id']) && !empty($_GET['prod_id'])) {
        $prod_id = $_GET['prod_id'];
        $sql = "SELECT * FROM product WHERE prod_id='$prod_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="updatepro.php" method="post">
                <input type="hidden" name="prod_id" value="<?php echo $row['prod_id']; ?>">
                <label for="prod_name">Product Name:</label>
                <input type="text" id="prod_name" name="prod_name" value="<?php echo $row['prod_name']; ?>"><br><br>
                <label for="prod_price">Product Price:</label>
                <input type="text" id="prod_price" name="prod_price" value="<?php echo $row['prod_price']; ?>"><br><br>
                
                <button type="submit">Update Product</button>
            </form>
            <?php
        } else {
            echo "No product found with the provided ID.";
        }
    } else {
        echo "Invalid product ID.";
    }

    $conn->close();
    ?>
</body>
</html
