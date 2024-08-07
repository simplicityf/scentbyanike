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
             
 <div class="container">
 
            <?php include('topnav.php'); ?>

    <div class="text-right">
       <a href="index.php"><span class="glyphicon glyphicon-remove-circle"></a>
    </div>

    <div class="row">
      <div class="media">
         <?php 
                $query = "select * from all_feedback";
                $object = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($object)){
                $f_user = $row['f_user'];

                $query = "select * from all_clients where u_id = '$f_user'";
                $objectf = mysqli_query($con, $query);
                while($few = mysqli_fetch_array($objectf)){
        
         ?>   
            

              
                <div class="col-sm-6 col-lg-4">
             <div class="media-left">
               <img src="imgs/<?php echo $few['u_Profile_Pic']; ?>" alt="media"  class="media-object">
            </div>
            <div class="media-body">
             <h4 class="media-heading"><?php echo $few['u_FullName']; ?>
            <br><small><?php echo $row['f_date']; ?></small></h4>
             <p><?php echo $row['f_message']; ?></p>
          </div>
          </div>
          <?php } } ?>

          <div class="col-sm-6 col-lg-4">
             <div class="media-left">
               <img src="img/muslimat.jpeg" alt="media"  class="media-object">
            </div>
            <div class="media-body">
             <h4 class="media-heading">Folakemi Boluwatife</h4>
             <p>I have never felt so refreshed in my life, using a good body spray just automatically makes your day &#128519;.</p>
          </div>
          </div>
        

        <div class="col-sm-6 col-lg-4">
          <!-- Left-aligned media object -->
          
           <div class="media-left">
             <img src="img/solomon.jpeg" alt="media"  class="media-object">
          </div>
          <div class="media-body">
           <h4 class="media-heading">Solomon Adeoye</h4>
           <p>I'm always receiving compliment anytime i use my bodyspray &#128521;. And i trust Anike  to always deliver anytime i run out of spray &#128077;.</p>
        </div>
        </div>
       
        <div class="col-sm-6 col-lg-4">
          <!-- Left-aligned media object -->
          
           <div class="media-left">
             <img src="img/motun.jpg" alt="media"  class="media-object">
          </div>
          <div class="media-body">
           <h4 class="media-heading">Ikeoluwa Motunsola</h4>
           <p>Scent by Anike all the way &#128143;. My dressing is not complete if i don,t use perfume from her store, and anywhere i am she makes sure she deliver it to me &#129303;.</p>
        </div>
        </div>
          </div>
         
        </div>

    <form method="post" action="" autocomplete="on" enctype="multipart/form-data">

   <h3>Feedback?</h3>
   
   <textarea class="form-control" id="feedback" name="feedback" placeholder="feedback" rows="7"></textarea> <br><br>
    <input type="submit" value="Submit" class="btn-primary" name="submit">
   </form>
 
   <?php 
        if(isset($_POST['submit'])) {
           $f_message = $_POST['feedback'];
           $date = date('y-m-d h-i-s');
           $f_date = $date;
           
                 
          
                   $f_id = $_SESSION['u_id'];
            
                $query_sel = "insert into all_feedback (f_message, f_date, f_user)
                              values ('$f_message', '$f_date', '$f_id')";
                  if(mysqli_query($con, $query_sel)) {
                  echo "<script>alert('Thank You For Your Feedback')</script>";
                  echo "<script>window.open('feedback.php', '_self')</script>";
                 }
             
            }
              ?>

    </div>
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
    <?php }?>