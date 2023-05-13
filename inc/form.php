<?php

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


    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName =  mysqli_real_escape_string($conn, $_POST['lastName']);
    $email =     mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users(firstName, lastName, email)
    VALUES ('$firstName', '$lastName', '$email')";

    if(empty($firstName)){
        echo 'Enter first name';
    }elseif(empty($lastName)){
        echo 'Enter Last name';
    }elseif(empty($email)){
        echo 'Enter Email';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'enter a vaild email';
    }
    else{
        if(mysqli_query($conn, $sql)){
    header('Location: index.php');
}else{
    echo 'Error: ' . mysqli_error($conn);
}
}
}