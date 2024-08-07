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
        <a href="all_product.php"><span class="glyphicon glyphicon-remove-circle"></a>
     </div>

    <h3><a href="edit_post_product.php?edit_post=<?php echo $p_id; ?>" title="Edit">Edit Post</a></h3>

    <?php 
    if(isset($_GET['edit_p'])) {
      $id = $_GET['edit_p'];
      $query = "select * from all_product where p_id='$id'";
      $object = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($object)){
         $p_id = $row['p_id'];
         $p_picture = $row['p_picture'];
         $p_pname = $row['p_product_name'];
         $p_price = $row['p_product_price']; 

    ?>

<form method="post" action="" enctype="multipart/form-data">
  
    <div class="form-group">
        <label for="pic">Picture</label>
        <input type="file" class="form-control" id="pic" name="picture">
        <img src="imgs/<?php echo $p_picture; ?>" alt="img" width="50px" height="50px">
      </div>

    <div class="form-group">
      <label for="pname">Product Name</label>
      <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $p_pname; ?>">
    </div>

    <div class="form-group">
      <label for="price">Product Price</label>
      <input type="number" class="form-control" id="price" name="price" value="<?php echo $p_price; ?>">
    </div>
    <input type="submit" class="btn-primary" value="Upadate" name="update">
  </form>
   <?php } } ?>

   <?php 
  if(isset($_POST['update'])) {
    $p_picture = $_FILES['picture'] ['name'];
    $p_picture_temp = $_FILES['picture'] ['tmp_name'];
    $p_pname = $_POST['pname'];
    $p_price = $_POST['price'];
    $p_id = $_SESSION['u_id'];

       move_uploaded_file($p_picture_temp, "imgs/$p_picture");

    $query_up = "update all_product set p_picture='$p_picture', p_product_name='$p_pname', p_product_price='$p_price' where p_id = '$id'";

         if(mysqli_query($con, $query_up)){
          echo "<script>alert('update successful')</script>";
           echo "<script>window.open('shop.php', '_self')</script>";
       }
     } ?>

  


 </div>
</body>
</html>
<?php }?>