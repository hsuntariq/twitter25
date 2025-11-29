<?php 
session_start();
    include './config.php';
    $email = $_POST['email'];
    $pass = $_POST['password'];


    // check if user exists or not

    $checkUser = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

    $result = mysqli_query($connection,$checkUser);

    // check if rows exist or not

    if(mysqli_num_rows($result) > 0){
        foreach($result as $item){
            $_SESSION['token'] = $item['name'];
            $_SESSION['email'] = $item['email'];
            $_SESSION['user_id'] = $item['id'];
            $_SESSION['login_success'] = 'Welcome ' . $item['name'];
            header("Location: $base_url");
        }
    }else{
        $_SESSION['invalid_credentials'] = 'Invalid Credentials';
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }

    





?>