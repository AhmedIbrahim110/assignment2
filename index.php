<?php

include'./inc/conn.php';

if(isset($_POST['firstName'])){
$firstName = $_POST['firstName'];
}
if(isset($_POST['lastName'])){
$lastName = $_POST['lastName'];
}
if(isset($_POST['email'])){
$email = $_POST['email'];
}

if(isset($_POST['submit'])){
//echo $firstName . ' ' . $lastName . ' ' . $email;

$sql = "INSERT INTO users(firstName, lastName, email)
VALUES ('$firstName', '$lastName', '$email')";
if(mysqli_query($conn, $sql)){
    header('Location: index.php');
}else{
    echo 'Error: ' . mysqli_error($conn);
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder = "Email">
    <input type="submit" name="submit" value="send">
</form>
    

<script src="./js/script.js"></script>
</body>
</html>