<!DOCTYPE html>
<?php
          
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
    <?php if (!isset($_SESSION['u_id'])) { ?>
         <div class="text-right">
          <a href="login.php">SIGNUP/LOGIN</a>
          </div>

      <?php   }  else {?>

    <div class="container">
    <?php 
          $u_id = $_SESSION['u_id'];
          $all_clients = "select * from all_clients where u_id = $u_id";
           $object = mysqli_query ($con, $all_clients);
            while($row = mysqli_fetch_array($object)) {

    
    ?>
       <div class="text-right">
       <img class="img-circle" src="imgs/<?php echo $row['u_Profile_Pic']; ?>" alt="img" width="40px" height="40px">
        <?php echo $row['u_FullName']; ?>
       
       <i id="userdrop" class="fa-solid fa-bars"></i>
       
       </div>
        
        
        <div class="usermenu">
          <a href="user_profile.php" title="view Profile">View Profile</a>
            <a href="logout.php" title="Logout">Logout</a>
        </div>
          
    </div>
    <?php } ?>

    <script>
        $(document).ready(function(){
            $("#userdrop").click(function(){
                $(".usermenu").toggle();
            });
        });
    </script>

    </body>
    </html>
    <?php } ?>