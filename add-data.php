<?php 
session_start();
    include './config.php';


    // get the values from the form
    $caption = $_POST['caption'];
    // get the file type
    $mediaName = $_FILES['tweet-image']['name'];
    $mediaTmp = $_FILES['tweet-image']['tmp_name'];
    $user_id = $_SESSION['user_id'];
    // store the file in the server
    move_uploaded_file($mediaTmp,'./tweet-images/' . $mediaName); 
    // store in the database
    $insert = "INSERT INTO posts (caption,assets,user_id) VALUES ('$caption','$mediaName',$user_id)";
    mysqli_query($connection,$insert);
    header("Location: {$_SERVER['HTTP_REFERER']}");

?>