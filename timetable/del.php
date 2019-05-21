<?php 
	require('dbconnect.php');
	$id=$_REQUEST['time_id'];
	$query = "DELETE FROM timetable WHERE time_id=$id"; 
	$result = mysqli_query($conn,$query) or die ( mysqli_error()); 
	header("Location: display.php");
 ?>