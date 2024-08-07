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
 <div class="container">
    <div class="text-right">
        <a href="login.php"><span class="glyphicon glyphicon-remove-circle"></a>
     </div>
    <h4>Register</h4>
  <form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Full Name" name="FullName" required>
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email" required>
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <select name="Country" title="select" class="form-control" id="country" placeholder="Nigeria" required>
            <option>Nigeria</option>
        </select>
      </div>
      <div class="form-group">
        <label for="state">State:</label>
        <select name="uState" title="select" class="form-control" id="state" placeholder="choose state" required>
            <option>Abia</option>
            <option>Adamawa</option>
            <option>Akwa Ibom</option>
            <option>Anambra</option>
            <option>Bauchi</option>
            <option>Bayelsa</option>
            <option>Benue</option>
            <option>Borno</option>
            <option>Cross River</option>
            <option>Delta</option>
            <option>Ebonyi</option>
            <option>Ekiti</option>
            <option>Enugu</option>
            <option>FCT - Abuja</option>
            <option>Gombe</option>
            <option>Imo</option>
            <option>Jigawa</option>
            <option>Kaduna</option>
            <option>Kano</option>
            <option>Katsina</option>
            <option>Kebbi</option>
            <option>Kogi</option>
            <option>Kwara</option>
            <option>Lagos</option>
            <option>Nasarawa</option>
            <option>Niger</option>
            <option>Ogun</option>
            <option>Ondo</option>
            <option>Osun</option>
            <option>Oyo</option>
            <option>Plateau</option>
            <option>Rivers</option>
            <option>Sokoto</option>
            <option>Taraba</option>
            <option>Yobe</option>
            <option>Zamfara</option>
        </select>
      </div>

      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" placeholder="City" name="City" required>
      </div>

      <div class="form-group">
        <label for="telnum">Phonenumber:</label>
        <input type="tel" class="form-control" id="telnum" placeholder="phone no." name="Phone_no" required>
      </div>


    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="uPassword" required>
    </div>
 
    <div class="form-group">
        <label for="picture">Profile pic:</label>
        <input type="file" id="picture" name="Profile_Pic" class="form-control" required>
      </div>

    <input type="submit" name="register" class="btn btn-primary" value="Register" required>
  </form>

  <?php 
  if(isset($_POST['register'])){
    $u_FullName = $_POST['FullName'];
    $u_Email = $_POST['Email'];
    $u_Country = $_POST['Country'];
    $u_State = $_POST['uState'];
    $u_City = $_POST['City'];
    $u_Phone_no = $_POST['Phone_no'];
    $u_Profile_Pic = $_FILES['Profile_Pic'] ['name'];
    $u_Profile_Pic_temp = $_FILES['Profile_Pic'] ['tmp_name'];
    $u_Password = $_POST['uPassword'];

    move_uploaded_file($u_Profile_Pic_temp, "imgs/$u_Profile_Pic");

    $query = "insert into all_clients (u_FullName, u_Email, u_Country, u_State, u_City, u_Phone_no, u_Profile_Pic, u_Password)
             values ('$u_FullName', '$u_Email', '$u_Country', '$u_State', '$u_City', '$u_Phone_no', '$u_Profile_Pic', '$u_Password')";
     if(mysqli_query($con, $query)){
      echo "<script>window.open('login.php', '_self')</script>";
     }
  }
  ?>

  <br>
  <br>

  <div class="text-left">
   <p>Have account?</p>
   <a href="login.html">
   <button type="submit" class="btn btn-primary">Login
   </button>
   </a>
</div>


 </div>
</body>
</html>