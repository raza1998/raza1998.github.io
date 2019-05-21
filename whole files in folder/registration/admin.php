<?php
session_start();





//longin pag


if (!isset($_SESSION['username'])) {
	header("Location: ./index.php");
}



 echo "hello ";

echo "<a href='logout.php'>logout</a>'";

// echo $_SESSION["username"];



?>