<?php
include("dbConnection.php");
$admin_name = $_POST['c_username'];
$admin_pass = $_POST['c_password'];
$sql = "SELECT * FROM admin WHERE admin_mobile= '$admin_name' AND admin_pass='$admin_pass'";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);
$me = "invalid password";
session_start();
if ($resultcheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $_SESSION["admin_id"] = $row['admin_id'];
    }
    $_SESSION["admin_name"] = $_POST['admin_name'];
    header("location:adminhome.php");
} else {
    header("location: ./adminlog.php?password_msg= Enter a correct password");
}
?>
