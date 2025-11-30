<?php 
session_start();
    include './config.php';
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['post_id'];

    // insert comment

    $query = "INSERT INTO comments (comment,post_id,user_id) VALUES ('$comment',$post_id,$user_id)";

    mysqli_query($connection,$query);
    $_SESSION['comment_success'] = 'Comment Done ✔';
    header("Location: $base_url");



?>