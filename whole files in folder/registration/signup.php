<?php
 
 

require_once('database.php');
 
// set user property values
$username = $_POST['user'];
$password = $_POST['pass'];
$repeatPassword = $_POST['repeatPass'];
$email    = $_POST['email'];
$created  = date('Y-m-d H:i:s');
 

 if($password != $repeatPassword){
    die("Password and Repeat password does not match");
 }

 $password = md5($password);

 $sql = "INSERT INTO users(username,password,email,created) VALUES ('$username', '$password', '$email', '$created')";

  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
    alert('New record created successfully, click ok to login');
    window.location.href = './index.php';
  </script>" ;
  } 
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


?>