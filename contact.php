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

            <main id="contact">
            
                    <?php include('topnav.php'); ?>
    <div class="container-fluid">
    <div class="container1">
      <a href="#"> <img src="img/dolce&gabbana.jpg" alt="perfume" class="hex">
      </a>
      <div class="texton text-center center1">
        <h1 class="h1b2">Contact Information</h1>
        <p class="p12">Contact us for any message and inquires</p>
        <button type="button" class="btn btn-primary btn-md ">Contact us
        </button>
                </div>
              </div>
              </div>
  
   <div class="container">
    <p class="text-center"><em>Send us a message!</em></p>
  
    <div class="row">
    <div class="col-md-4">
    <p>Fan? Drop a note.</p>
    <p><span class="glyphicon glyphicon-map-marker"></span>Olodo Garage <br> Ibadan, Oyo State,Nigeria</p>
    <p><span class="glyphicon glyphicon-phone"></span>Phone: 08108334969
    </p>
    <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:adetoybatmi@gmail.com"> adetoybatmi@gmail.com</a></p>
    <p><i class="fa-brands fa-whatsapp"></i><a href="https://wa.me/message/ZHJH5PW4BLDIH1">
      <button type="button" class="btn btn-success">
        WhatsApp
      </button>
    </a></p>
    <p>Follow us on our social media platform!</p>
    <div class="text-left">
      <a href="https://www.facebook.com/adeola.nasir.9?mibextid=ZbWKwL" title="Facebook"><i class="fa-brands fa-facebook fb"></i></a>
      <a href="https://www.instagram.com/lady_anike?igsh=YTFpMmFwZWx6Y3Vy" title="Instagram"><i class="fa-brands fa-instagram ig"></i></a>
      <a href="https://www.tiktok.com/@lady_anike?_r=1&_d=edkhddibi2eala&sec_uid=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&share_author_id=6813977790288708614&sharer_language=en&source=h5_m&u_code=dblabealm8daag&timestamp=1717233817&user_id=6813977790288708614&sec_user_id=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7372492772902995718&share_link_id=bfd38fce-7b26-4690-9e59-47a56d959ff1&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb4907&social_share_type=5&enable_checksum=1" title="Tiktok"><i class="fa-brands fa-tiktok tik"></i></a>
      </div>
    </div>
  
    <form method="post" action="" autocomplete="on" enctype="multipart/form-data" onsubmit="return validateForm()"> 
  <div class="col-md-8">
    <div class="row">
    <div class="col-sm-6 form-group">
    <label> <input class="form-control" id="name" name="name" placeholder="Name" type="text" > </label>
    </div>
  
    <div class="col-sm-6 form-group">
    <label><input class="form-control" id="email" name="email" placeholder="Email" type="email" ></label>
    </div>
    </div>
    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
    <br>
    <div class="row">
    <div class="col-md-12 form-group">
     <input class="btn-primary pull-center" type="submit" value="Send" name="send">
          </div>

          </div>
           </div>
             </div>
            </form>
 
            <?php 
              if(isset($_POST['send'])){
                $m_name = $_POST['name'];
                $m_email = $_POST['email'];
                $m_message = $_POST['message'];
                $date = date('Y-m-d H-i-s');
                $m_date = $date;
                 
                
                  $m_user = $_SESSION['u_id'];
            
                $query_sel = "insert into all_message (m_name, m_email, m_message, m_date, m_extra)
                         values ('$m_name', '$m_email', '$m_message', '$m_date', '$m_user')";
                  if(mysqli_query($con, $query_sel)) {
                  echo "<script>alert('Message sent')</script>";
                  echo "<script>window.open('contact.php', '_self')</script>";
                 }
             
            }
              ?>
           
              <br>
              <br>
              <br>
          </div>
          </main>
          

    <div class="container">
    
      <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.307135730538!2d4.001694973736827!3d7.431224911952468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039eb48a083d861%3A0x7d861b75ec43fcbd!2sGarage%20Olodo!5e0!3m2!1sen!2sng!4v1719660830649!5m2!1sen!2sng" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>

    
    <footer class="text-center">
      <a class="up-arrow" href="#contact" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p><strong>Scent By Anike</strong></p>
      <div>
      <a href="https://wa.me/message/ZHJH5PW4BLDIH1" title="WhatsApp"><i class="fa-brands fa-whatsapp whatsapp"></i></a>
      <a href="https://www.facebook.com/adeola.nasir.9?mibextid=ZbWKwL" title="Facebook"><i class="fa-brands fa-facebook fb"></i></a>
      <a href="https://www.instagram.com/lady_anike?igsh=YTFpMmFwZWx6Y3Vy" title="Instagram"><i class="fa-brands fa-instagram ig"></i></a>
      <a href="https://www.tiktok.com/@lady_anike?_r=1&_d=edkhddibi2eala&sec_uid=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&share_author_id=6813977790288708614&sharer_language=en&source=h5_m&u_code=dblabealm8daag&timestamp=1717233817&user_id=6813977790288708614&sec_user_id=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7372492772902995718&share_link_id=bfd38fce-7b26-4690-9e59-47a56d959ff1&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb4907&social_share_type=5&enable_checksum=1" title="Tiktok"><i class="fa-brands fa-tiktok tik"></i></a>
      </div>
      <p><small>&copy; scent by anike</small></p>
    
    </footer>

           
  <script>
    $(document).ready (function() {
     $('[data-toggle="tooltip"]').tooltip();
     });
 </script>
</body>
</html>
<?php }?>