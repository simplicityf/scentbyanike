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
            <?php 
              $logged_user = $_SESSION['u_id'];
              $user = "select * from all_clients where u_id = $logged_user";
              $obj = mysqli_query($con, $user);
              $row = mysqli_fetch_array($obj);
              if ($row['u_Admin']=='True') {
            ?>
            <li><a href="dashboard.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Dashboard">DASHBOARD</a></li>
            <?php }
             ?>
            </ul>
            </div>
            </nav>
          
   <main>      
              <div class="text-right">
            <?php include('topnav.php'); ?>
            
            </div>
            
  <div class="container">


   <div class="row">
         <?php 
         $query = "select * from all_blog";
         $object = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($object)){

        
         ?>   
            
    <div class = "col-lg-3 col-sm-4 col-xs-6">
     <div class="card thumbnail text-center height">
      <img class="card-img-top imgheight" src="imgs/<?php echo $row['b_Picture']; ?>" alt="img">
      <div class="card-body">
       <div class="boddy">
      <h4 class="card-title"><strong><?php echo substr($row['b_Title'],0,20); ?></strong></h4>
      <p class="card-title"><b><?php echo substr($row['b_Content'],0,20); ?></b></p>
       <p class="card-text"><?php echo substr($row['b_Description'],0,20); ?></p>

       <a href="readmore_blog.php?post_id=<?php echo $row['b_other'] ?>" title="Read More">
         <div class="btn btn-primary">Read More</div>
        </a>
       </div>
        </div>
         </div>
         </div>

         <?php } ?>
        </div>
        </div>


            </main>
            <br>
            <br>
            <br>
            <br>
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
            </body>
            </html>
            <?php } ?>
