<?php
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

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $prod_id = $_POST['prod_id'];
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];

    $sql = "UPDATE product SET prod_name='$prod_name', prod_price='$prod_price' WHERE prod_id='$prod_id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: adminhome.php");
        exit;
    } else {
        echo "Error updating product details: " . $conn->error;
    }
}

$conn->close();
