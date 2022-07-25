<?php
$insert = false;
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection to database cannot be established: " . mysqli_connect_error());
    }
    // echo "Successfully connectd to database";
    $name = $_POST['name'];
    $eno = $_POST['eno'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `mark1`.`ticket` (`name`, `eno`, `gender`, `email`, `phone`, `desc`) VALUES ('$name', '$eno', '$gender', '$email', '$phone','$desc')";

    if ($con->query($sql) == true) {
        // echo "Insertion successful!";
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini project</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <img id="bgimg" src="./bg.jpg" alt="" class="bg">
    <div class="container">
        <h1>Welcome to ticket booking system</h1>
        <p>Enter your details here:</p>
        <?php
        if ($insert == true) {
            echo "<p class='submitmsg'> Response Submitted Successfully </p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="eno" id="eno" placeholder="Enter your Enrollment No.">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <button class="btn" type="reset">Reset</button>
        </form>
    </div>
</body>

</html>