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
        <nav class="navbar navv">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa-solid fa-bars"></i>                       
          </button>
          <div class="margint">
          <img src="images/logoaniks.png" alt="logo" class="logoimg">
       
          <a href="#" class="scent"> Scent By Anike </a>
          </div>
           
        </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right liist">
                <li><a href="index.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Home">HOME</a></li>
                <li><a href="shop.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Shop">SHOP</a></li>
                <li><a href="about.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="About">ABOUT</a></li>
                <li><a href="contact.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Contact">CONTACT</a></li>
                <li><a href="feedback.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Feedback">FEEDBACK</a></li>
                <li><a href="blog.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Blog">BLOG</a></li>
                <li><a href="dashboard.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Dashboard">DASHBOARD</a></li>
                </ul>
                </div>
               </nav>
 <div class="container">
    <div class="text-right">
       <a href="index.php"><span class="glyphicon glyphicon-remove-circle"></a>
    </div>
   
            <?php include('topnav.php'); ?>
            

    <div class="row">
        <div class="col-sm-6">
            <ul class="nav nav-pills nav-stacked dashboard">
                <li><a href="all_clients.php" class="white">All Client(s)</a></li>
                <li><a href="post_blog.php" class="white">Post Blog</a></li>
                <li><a href="all_blog.php" class="white">All Blog Post</a></li>
                <li><a href="client_message.php" class="white">Client Message(s)</a></li>
                <li><a href="orders.php" class="white">Orders</a></li>
                <li><a href="post_product.php" class="white">Post Products</a></li>
                <li><a href="all_product.php" class="white">All Products</a></li>
                <li><a href="shop.php" class="white">Shop</a></li>
            </ul>
        </div>
<br>
<br>
        <div class="col-sm-6">
            <div class="text-right">
            <a href="edit_user.php?edit_u=<?php echo $u_id; ?>" title="Edit"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="delclients.php?del_c=<?php echo $u_id; ?>" title="Delete"><button type="button" class="btn btn-default">Delete</button></a>
            </div>
      <?php 
          $u_id = $_SESSION['u_id'];
          $all_clients = "select * from all_clients where u_id = $u_id";
           $object = mysqli_query ($con, $all_clients);
            while($row = mysqli_fetch_array($object)) {

    
               ?>
                     
                     <h3><?php echo $row['u_FullName']; ?></h3>
                     <img class="img-circle img-responsive" src="imgs/<?php echo $row['u_Profile_Pic']; ?>" alt="img" width="100px" height="100px">
                 
                 
                     <div class="row">
                     <div class="col-sm-6">
                     <h3>Name<br>
                     <span><small><?php echo $row['u_FullName']; ?></small></span></h3>
                     </div>
     
                     <div class="col-sm-6">
                     <h3>Email<br>
                     <span><small><?php echo $row['u_Email']; ?></small></span></h3>
                     </div>


                     <div class="col-sm-6">
                     <h3>Country<br>
                         <span><small><?php echo $row['u_Country']; ?></small></span></h3>
                         </div>
      
                    <div class="col-sm-6">
                     <h3>State<br>
                       <span><small><?php echo $row['u_State']; ?></small></span></h3>
                       </div>


                       <div class="col-sm-6">
                       <h3>City<br>
                         <span><small><?php echo $row['u_City']; ?></small></span></h3>
                         </div>
                         </div>
                         <?php } ?>
           </div>
           </div>
           </div>
           

    <footer class="text-center">
  <p><strong>Scent By Anike</strong></p>
  <div>
  <a href="https://wa.me/message/ZHJH5PW4BLDIH1" title="WhatsApp"><i class="fa-brands fa-whatsapp whatsapp"></i></a>
  <a href="https://www.facebook.com/adeola.nasir.9?mibextid=ZbWKwL" title="Facebook"><i class="fa-brands fa-facebook fb"></i></a>
  <a href="https://www.instagram.com/lady_anike?igsh=YTFpMmFwZWx6Y3Vy" title="Instagram"><i class="fa-brands fa-instagram ig"></i></a>
  <a href="https://www.tiktok.com/@lady_anike?_r=1&_d=edkhddibi2eala&sec_uid=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&share_author_id=6813977790288708614&sharer_language=en&source=h5_m&u_code=dblabealm8daag&timestamp=1717233817&user_id=6813977790288708614&sec_user_id=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7372492772902995718&share_link_id=bfd38fce-7b26-4690-9e59-47a56d959ff1&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb4907&social_share_type=5&enable_checksum=1"><i class="fa-brands fa-tiktok tik" title="Tiktok"></i></a>
  <p><small>&copy; scent by anike</small></p>
   </div>

</footer>

<script>
  $(document).ready (function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
    </body>
    </html>
    <?php }?>