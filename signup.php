<?php 
    session_start();
    include './config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $months = $_POST['months'];
    $years = $_POST['years'];
    $dates = $_POST['dates'];

    // send the data to the database

    $create = "INSERT INTO users (name,email,password,date,month,year) VALUES ('$name','$email','$pass',$dates,'$months',$years)";



    // execute

    mysqli_query($connection,$create);


    // assign token / start sesssion

    $_SESSION['token'] = $name;
    $_SESSION['email'] = $email;

    header("Location: http://localhost:3000/");

?>