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
        <a href="index.php"><span class="glyphicon glyphicon-remove-circle"></a>
     </div>

    <h3>Edit Blog</h3>
    <?php 
    if(isset($_GET['edit_b'])) {
      $id = $_GET['edit_b'];
      $query = "select * from all_blog where b_id='$id'";
      $object = mysqli_query($con, $query);
      while($row = mysqli_fetch_array($object)){
         $b_id = $row['b_id'];
         $b_Title = $row['b_Title'];
         $b_Description = $row['b_Description'];
         $b_Content = $row['b_Content'];
         $b_Picture = $row['b_Picture']; 

    ?>
    <form method="post" action="" enctype="multipart/form-data">
  
    <div class="form-group">
        <label for="btitle">Title</label>
        <input type="text" class="form-control" id="btitle" name="btitle" value="<?php echo $b_Title; ?>">
      </div>

    <div class="form-group">
      <label for="bdescription">Description</label>
      <input type="text" class="form-control" id="bdescription" name="bdescription" value="<?php echo $b_Description; ?>">
    </div>

    <div class="form-group">
        <label for="bcontent">Content</label>
        <textarea class="form-control" id="bcontent" name="bcontent" rows="7" placeholder="<?php echo $b_Content; ?>" value="<?php echo $b_Content; ?>"></textarea> <br><br>
    </div>

    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" id="picture" name="b_picture" class="form-control" value="<?php echo $b_Picture; ?>" placeholder="<?php echo $b_Picture; ?>">
        <img src="imgs/<?php echo $b_Picture; ?>" alt="img" width="100px" height="100px">
      </div>

    <input type="submit" class="btn-primary" name="update" value="update">
  </form>
    <?php }
    } ?>
  <?php
  if(isset($_POST['update'])) {
    $b_title = $_POST['btitle'];
    $b_description = $_POST['bdescription']; 
    $b_content = $_POST['bcontent'];
    $b_picture = $_FILES['b_picture'] ['name'];
    $b_picture_temp = $_FILES['b_picture'] ['tmp_name'];
    $date = date('y-m-d h-i-s');
    $b_date = $date;
    $b_id = $_SESSION['u_id'];

       move_uploaded_file($b_picture_temp, "imgs/$b_picture");

    $query_up = "update all_blog set b_Title='$b_title', b_Description='$b_description', b_Content='$b_content', b_Picture='$b_picture', b_Date='$b_date' where b_id = '$id'";

         if(mysqli_query($con, $query_up)){
          echo "<script>alert('update successful')</script>";
           echo "<script>window.open('blog.php', '_self')</script>";
       }
     } ?>

 </div>
</body>
</html>
<?php }?>