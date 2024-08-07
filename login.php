<!DOCTYPE html>
<?php
session_start();
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
 <div class="container" id="login">
    <h4>Please Login</h4>
    <form method="post" action="">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="uPassword">
    </div>
    <input type="submit" class="btn btn-primary" name="login" value="Login">
  </form>

  <?php 
  if(isset($_POST['login'])){
    $u_Email = $_POST['Email'];
    $u_Password = $_POST['uPassword'];

    $query= "select * from all_clients where u_Email='$u_Email' and u_Password='$u_Password'";
    $user = mysqli_query($con, $query);
    $row = mysqli_fetch_array($user);
    $u_id = $row['u_id'];
    $num_of_row = mysqli_num_rows($user);
    if($num_of_row==1){
      $_SESSION['u_id'] = $u_id;
      echo "<script>window.open('index.php', '_self')</script>";
    }
    else {
      echo"<script>alert('Your Username Or Password is not Correct')</script>";
    }
  }
  ?>

  <div class="text-center">
    <a href="forgot.php">Forgot Password?</a>
  </div>

  <br>
  <br>

  <div class="text-left">
   <p>Don't have account?</p>
   <a href="register.php">
   <button type="submit" class="btn btn-primary">Register</button>
   </a>
</div>


 </div>
</body>
</html>