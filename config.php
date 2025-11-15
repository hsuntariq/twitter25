<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'twitter';


    // connection
    $connection = mysqli_connect($hostname,$username,$password,$db) or die();

?>