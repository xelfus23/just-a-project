<?php 
    session_start();

    define('DB_HOST' , 'localhost');
    define('DB_NAME', 'personal-website');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die (mysqli_error($conn));
    $db_select = mysqli_select_db($conn, DB_NAME) or die (mysqli_error($conn));

?>