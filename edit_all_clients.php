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
    <div class="text-right">
       <a href="all_clients.php"><span class="glyphicon glyphicon-remove-circle"></a>
    </div>
    
    <h4>Edit client profile</h4>

    <form method="post" action="" autocomplete="on" enctype="multipart/form-data">
    <?php
    if(isset($_GET['edit_c'])) {
      $id = $_GET['edit_c'];
      $query = "select * from all_clients where u_id='$id'";
      $object = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($object)){
       $u_id = $row['u_id'];
     
    ?>
    <div class="form-group">
        <label for="name">FullName</label>
        <input type="text" class="form-control" id="name" placeholder="Full Name" name="FullName" value="<?php echo $row['u_FullName']; ?>" readonly>
      </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" value="<?php echo $row['u_Email']; ?>" class="form-control" id="email" placeholder="Enter email" name="Email" readonly>
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <select name="Country" value="<?php echo $row['u_Country']; ?>" title="select" class="form-control" id="country" placeholder="Nigeria" readonly>
            <option>Nigeria</option>
        </select>
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <select name="uState" title="select" class="form-control" id="state" value="<?php echo $row['u_State']; ?>" placeholder="choose state" readonly>
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
        <label for="city">City</label>
        <input type="text" class="form-control" value="<?php echo $row['u_City']; ?>" id="city" placeholder="City" name="City" readonly>
      </div>

      <div class="form-group">
        <label for="telnum">Phone Number</label>
        <input type="tel" class="form-control" value="<?php echo $row['u_Phone_no']; ?>" id="telnum" placeholder="phone no." name="Phone_no" readonly>
      </div>

      <div class="form-group">
        <label for="picture">Profile Picture</label>
        <input type="file" id="picture" name="Profile_Pic" class="form-control">
        <img src="imgs/<?php echo $row['u_Profile_Pic']; ?>" alt="img" width="50px" height="50px">
      </div>

      <div class="form-group">
      <input type="checkbox" value="True" id="flex" name="admin">
        <label for="flex">Make as admin </label>
      </div>
 
      

        <input type="submit" class="btn-primary" name="update" value="Update">
  </form>
  <?php  }
    } ?>

    <?php
    if(isset($_POST['update'])) {
      $u_FullName = $_POST['FullName'];
      $u_Email = $_POST['Email'];
      $u_Country = $_POST['Country'];
      $u_State = $_POST['uState'];
      $u_City = $_POST['City'];
      $u_Phone_no = $_POST['Phone_no'];
      $u_Profile_Pic = $_FILES['Profile_Pic'] ['name'];
      $u_Profile_Pic_temp = $_FILES['Profile_Pic'] ['tmp_name'];
      $u_admin = $_POST['admin'];
      $u_id = $row ['u_id'];
  
      move_uploaded_file($u_Profile_Pic_temp, "imgs/$u_Profile_Pic");

      $update = "update all_clients set u_FullName='$u_FullName', u_Email='$u_Email', u_Country='$u_Country', u_State='$u_State', u_City='$u_City', u_Phone_no='$u_Phone_no', u_Profile_Pic='$u_Profile_Pic', u_Admin='$u_admin' where u_id = '$u_id'";

      if(mysqli_query($con, $update)){
        echo "<script>alert('update successful')</script>";
        echo "<script>window.open('all_clients.php', '_self')</script>";
        exit();
      }
    }
    ?>




 </div>
</body>
</html>
<?php }?>