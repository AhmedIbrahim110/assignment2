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

$errors =[
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];
    
if(isset($_POST['submit'])){





    //تحقق الاسم الاول
    if(empty($firstName)){
        $errors['firstNameError'] = 'يرجى ادخال الأسم الاول';
    }
    //تحقق الاسم الاخير
    if(empty($lastName)){
        $errors['lastNameError'] = 'يرجى ادخال الأسم الاخير';
    }
    //تحقق الايميل
    if(empty($email)){
        $errors['emailError'] = 'يرجى ادخال الإيميل';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'يرجى ادخال إيميل صحيح ';
    }
    //تحقق لا يوجد اخطاء
    if(!array_filter($errors)){
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName =  mysqli_real_escape_string($conn, $_POST['lastName']);
        $email =     mysqli_real_escape_string($conn, $_POST['email']);
        $sql = "INSERT INTO users(firstName, lastName, email)
        VALUES ('$firstName', '$lastName', '$email')";
                if(mysqli_query($conn, $sql)){
                    header('Location: index.php');
                }else{
                    echo 'Error: ' . mysqli_error($conn);
                }
                }
    }
