<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ppink";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    //     echo "Success";
    // } else {
    die("Error database connection failed" . mysqli_connect_error());
}
