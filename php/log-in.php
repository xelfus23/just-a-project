<?php 

    include("../php/database/database.php");

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user_accounts WEHRE username = '$username'AND password = '$password'";

        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);

        if($count == 1){

            $_SESSION['login'] = "<div class ='success'> Login successful.</div>";
            $_SESSION['user'] = $usernaclose;
        }
    }
    else{
        $_SESSION['login'] = 'Enter username and password';
    }

?>