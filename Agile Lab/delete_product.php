<?php
include("dbConnection.php");

// Check if prod_id is set and not empty
if(isset($_POST["prod_id"]) && !empty($_POST["prod_id"])) {
    // Sanitize the input to prevent SQL injection
    $prod_id = mysqli_real_escape_string($conn, $_POST["prod_id"]);

    // Prepare the SQL statement
    $sql = "DELETE FROM product WHERE prod_id='$prod_id'";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        // Redirect after ensuring no output has been sent
        ob_clean(); // Clear output buffer
        header("Location: adminhome.php");
        exit(); // Stop script execution
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid product ID";
}

mysqli_close($conn);

