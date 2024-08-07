<!DOCTYPE html>
<?php
session_start();

            if (!isset($_SESSION['u_id'])) {
              echo"<script>window.open('login.php', '_self')</script>";
            }
            else {
          
 include ('mycon.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scent By Anike</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- This webiste is created by Omobolanle Azeezat -->

<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Google map-->

<script src="map.js"></script>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/ba9d34204b.js" crossorigin="anonymous"></script>

<!--favico icon-->
<link rel="icon" href="images/logoaniks.png">

</head>
<body>
    <div class="container">
      
            <?php include('topnav.php'); ?>
            
           <div id="userview">
           <div class="row">
           <?php 
           $u_id = $_SESSION['u_id'];
            $all_clients = "select * from all_clients where u_id = $u_id";
           $object = mysqli_query ($con, $all_clients);
            while($row = mysqli_fetch_array($object)) {

    
               ?>
          <div class="text-right">
            <a href="edit_user.php?edit_u=<?php echo $u_id; ?>" title="Edit"><button type="button" class="btn btn-primary">Edit</button></a>
              <a href="delclients.php?del_c=<?php echo $u_id; ?>" title="Delete"><button type="button" class="btn btn-default">Delete</button></a>
                <a href="index.php"> &times; </a>
        </div>

            <div class="col-xs-6">
            
                <div id="Username">
                <h3><?php echo $row['u_FullName']; ?></h3>
                <img class="img-circle img-responsive" src="imgs/<?php echo $row['u_Profile_Pic']; ?>" alt="img" width="100px" height="100px">
            </div>
        </div>
        
            
          <div class="col-xs-6">
            
            <div>
                <div class="userdetail">
                <h3>Name<br>
                <span><small><?php echo $row['u_FullName']; ?></small></span></h3>

                <h3>Email<br>
                <span><small><?php echo $row['u_Email']; ?></small></span></h3>
 
                <h3>Country<br>
                    <span><small><?php echo $row['u_Country']; ?></small></span></h3>

                <h3>State<br>
                  <span><small><?php echo $row['u_State']; ?></small></span></h3>

                  <h3>City<br>
                    <span><small><?php echo $row['u_City']; ?></small></span></h3>
                    </div>
            
            </div>
          

           </div>
         </div>
         <?php } ?>
        </div>
     </div>
    </div>
</body>
</html>
<?php } ?>