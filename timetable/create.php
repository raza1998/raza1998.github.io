<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Time Table</title>
    <style>
    body{
      background-image: url(image2.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    </style>
  </head>
  <body>
    <?php

require_once('dbconnect.php');?>



  <br><br><br>
      <h6 align="center"><a href="index.php">Back to Main Menu</a></h6>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Time Table</h1>
      <p class="lead">Enter Data</p>
      <form action="" method="post">
        <div class="form-group">
          <label for="day">Day</label>
<!--           <input type="text" class="form-control" name="day" id="day_id" placeholder="Monday" required> -->

          <select name="day" class="form-control">
            <option value="Mon">Monday</option>
            <option value="Tue">Tuesday</option>
            <option value="Wed">Wednesday</option>
            <option value="Thu">Thursday</option>
            <option value="Fri">Friday</option>
          </select>

        </div>
        <div class="form-group">
          <label for="classes">Classes</label>
          <input type="text" class="form-control" name="classes" id="Classes" placeholder="ClassOne" required>
        </div>
        <div class="form-group">
          <label for="period1">Period 1</label>
          <input type="text" class="form-control" name="period1" id="p1" placeholder="P1" required>
        </div>
        <div class="form-group">
          <label for="period2">Period 2</label>
          <input type="text" class="form-control" name="period2" id="p2" placeholder="P2" required>
        </div>
        <div class="form-group">
          <label for="period3">Period 3</label>
          <input type="text" class="form-control" name="period3" id="p3" placeholder="p3" required>
        </div>
        <div class="form-group">
          <label for="period4">Period 4</label>
          <input type="text" class="form-control" name="period4" id="p4" placeholder="P4" required>
        </div>
        <div class="form-group">
          <label for="period5">Period 5</label>
          <input type="text" class="form-control" name="period5" id="p5" placeholder="P5" required>
        </div>
        <div class="form-group">
          <label for="period6">Period 6</label>
          <input type="text" class="form-control" name="period6" id="p6" placeholder="P6" required>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        
      </form>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php

if(isset($_POST['submit']))
{
  include "dbconnect.php";

  $day_id = $_POST["day"];
  $Classes = $_POST["classes"];
  $p1 = $_POST["period1"];
  $p2 = $_POST["period2"];
  $p3 = $_POST["period3"];
  $p4 = $_POST["period4"];
  $p5 = $_POST["period5"];
  $p6 = $_POST["period6"];


  $sql = "INSERT INTO timetable(day_id, Classes, p1, p2, p3,p4,p5,p6) VALUES ('$day_id', '$Classes', '$p1', '$p2', '$p3','$p4','$p5','$p6')";

  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
    alert('New record created successfully');
  </script>" ;
  } 
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?>