<?php 
    include './config.php';


    // get the values from the form
    $caption = $_POST['caption'];
    // get the file type
    $mediaName = $_FILES['tweet-image']['name'];
    $mediaTmp = $_FILES['tweet-image']['tmp_name'];
    // store the file in the server
    move_uploaded_file($mediaTmp,'./tweet-images/' . $mediaName); 
    // store in the database
    $insert = "INSERT INTO posts (caption,assets) VALUES ('$caption','$mediaName')";
    mysqli_query($connection,$insert);
    header("Location: {$_SERVER['HTTP_REFERER']}");

?>