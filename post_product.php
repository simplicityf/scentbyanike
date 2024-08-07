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
    <div class="text-right">
        <a href="dashboard.php"><span class="glyphicon glyphicon-remove-circle"></a>
     </div>

    <h3>Post</h3>
    <form method="post" action="" enctype="multipart/form-data">
  
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" id="picture" name="ppicture" class="form-control">
      </div>

    <div class="form-group">
      <label for="pname">Product Name</label>
      <input type="text" class="form-control" id="pname" name="pname">
    </div>

    <div class="form-group">
      <label for="price">Product Price</label>
      <input type="number" class="form-control" id="price" name="pprice">
    </div>
    <input type="submit" class="btn btn-primary" name="post" value="Post">
  </form>
  <?php 
    if(isset($_POST['post'])) {
     $p_ppicture = $_FILES['ppicture'] ['name'];
     $p_ppicture_temp = $_FILES['ppicture'] ['tmp_name'];
     $p_pname = $_POST['pname'];
     $p_pprice = $_POST['pprice'];
     

       move_uploaded_file($p_ppicture_temp, "imgs/$p_ppicture");

    $query_up = "insert into all_product (p_picture, p_product_name, p_product_price) values ('$p_ppicture', '$p_pname', '$p_pprice')";

         if(mysqli_query($con, $query_up)){
           echo "<script>window.open('shop.php', '_self')</script>";
       }
     }
  ?>
  


 </div>
</body>
</html>
<?php }?>