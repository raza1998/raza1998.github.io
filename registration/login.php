<?php

        
require_once('database.php');
 
// set ID property of user to be edited
    $username = isset($_POST['user']) ? $_POST['user'] : die();
    $password = isset($_POST['pass']) ? md5($_POST['pass']) : die();

session_start();
if (isset($_POST['username'])) {
    
    if (empty($_POST['username'])|| empty($_POST['password'])) {
        $error="username and password Invalid";
    }
}
else{


 $sql = "Select username,password from users where username = '$username' and password='$password'";
      
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        
        $_SESSION['username'] = $username;
        
        header("Location: ./admin.php");
    }else{
        echo "Invalid Login Details";
    }
}

?>


