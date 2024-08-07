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
 <?php 
              if(!isset($_SESSION['u_id']))
              {
              ?>
   
              <div class="text-right">
              <a href="register.php" title="signup/login">Signup/Login</a>
            </div>
            <?php } else { ?>

            <?php include('topnav.php'); ?>
            <?php } ?>

    <div class="text-right">
       <a href="blog.php"><span class="glyphicon glyphicon-remove-circle"></a>
    </div>
    <?php 
      if(isset($_GET['post_id'])){
         $bb_id = $_GET['post_id'];
         $query = "select * from all_blog where b_other='$bb_id'";
         $object = mysqli_query($con, $query);
         $row = mysqli_fetch_array($object);
         $b_id = $row['b_id'];
         $b_Title = $row['b_Title'];
         $b_Description = $row['b_Description'];
         $b_Content = $row['b_Content'];
         $b_Picture = $row['b_Picture'];
         $b_date = $row['b_Date'];
         $b_user = $row ['b_other'];

         $user = "select * from all_clients where u_id = '$b_user'";
         $obj = mysqli_query($con, $user);
         $row = mysqli_fetch_array($obj);


      }
    ?>
    <h4><?php echo $b_Title ?></h4>

    <p>Published By:<b><?php echo $row['u_FullName']; ?></b>
   <br><b><?php echo $b_date; ?></b></p>

    <img src="imgs/<?php echo $b_Picture; ?>" alt="img" width="500" height="400" class="img-rounded img-responsive">

    <p><?php echo $b_Content ?></p>

    <p><?php echo $b_Description ?></p>

    </div>
    
    </body>
    </html>
    <?php } ?>