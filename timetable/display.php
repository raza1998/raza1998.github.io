 <!Doctype html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Time Table</title>
  <style>
    body{
      background-image: url(image3.jpg);
      background-size: cover;
      background-attachment: fixed;
    }

    th,td{
      text-align: center;
    }
  </style>
</head>
<body>


  <br><br><br>
        <h6 align="center"><a href="index.php">Back to Main Menu</a></h6>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4" align="center">Time Table</h1>
      
      <h2></h2>

      <?php
      include "dbconnect.php";

      $days = array("Mon" =>"Monday","Tue" =>"Tuesday","Wed" =>"Wednesday","Thu" =>"Thursday","Fri" =>"Friday");
      

      $todayDay = $_POST['day'];

      if($todayDay == "Sat" || $todayDay == "Sun" )
        $sql = "Select * from timetable where day_id = 'Mon'";
      else
        $sql = "Select * from timetable where day_id = '$todayDay'";
      $result = mysqli_query($conn, $sql);

      ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <?php       
            if($todayDay == "Sat" || $todayDay == "Sun" ){  ?>
              <th colspan="7">Monday</th>
              <?php 
            } else{?>
              <th colspan="8"><?php echo $days[$todayDay] ?></th>   
              <?php 
            }
            ?>

          </tr>
          <tr>
            <th scope="col">Classes</th>
            <th scope="col">Period 1</th>
            <th scope="col">Period 2</th>
            <th scope="col">Period 3</th>
            <th scope="col">Period 4</th>
            <th scope="col">Period 5</th>
            <th scope="col">Period 6</th>
            <th scope="col">Update/Delete</th>
          </tr>
        </thead>  
        <?php 
        if(mysqli_num_rows($result)>0){

          ?>

          <?php  
          while($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
             <td>
               <?php echo $row["Classes"]; ?>
             </td>
             <td>
               <?php echo $row["p1"]; ?>
             </td>
             <td>
               <?php echo $row["p2"]; ?>
             </td>
             <td>
               <?php echo $row["p3"]; ?>
             </td>
             <td>
               <?php echo $row["p4"]; ?>
             </td>
             <td>
               <?php echo $row["p5"]; ?>
             </td>
             <td>
               <?php echo $row["p6"]; ?>
             </td>
             <td><a href="update.php?time_id=<?php echo $row["time_id"] ?>&day_id=<?php echo $row["day_id"] ?>&Classes=<?php echo $row["Classes"] ?>">update</a> | <a href="del.php?time_id=<?php echo $row["time_id"] ?>">delete</a></td>
           </tr>

           <?php 
         }
         ?>
       </table> 
       <?php    
     }
     ?>  
   </div>
 </div>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>