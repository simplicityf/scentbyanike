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


            <main id="about">
            <?php 
              if(!isset($_SESSION['u_id']))
              {
              ?>
   
              <div class="text-right">
              <a href="register.php" title="signup/login">Signup/Login</a>
            </div>
            <?php } else { ?>
            
            <?php include('topnav.php'); ?>
            <?php } ?>
      <div class="container-fluid">
          <!--carousel-->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
        
              <div class="item active">
                <img src="img/cool_girl.jpg" alt="Los Angeles">
              </div>
        
              <div class="item">
                <img src="img/karamrah_30ml.jpg" alt="Chicago">
                
              </div>
            
              <div class="item">
                <img src="img/intense_man.jpg" alt="New York">
        
              </div>
          
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
         <br>
       <p>
       Here at Scent By Anike, this is ultimate destination for fragrance and personal care products. Explore our extensive collection featuring a variety of scents and products tailored for every need and preference.

       Discover our exclusive range of perfumes for men and women, meticulously crafted to evoke elegance and allure. Whether you prefer classic notes or contemporary blends, we have something to suit every taste. <br>

       For a lighter alternative, explore our selection of body sprays and roll-ons. Perfect for daily use, these products offer a refreshing burst of fragrance that lasts throughout the day. <br>

       Our offerings aren't limited to just adults—we also cater to kids with delightful scents that are gentle and playful, ensuring they feel fresh and confident. <br>
       </p>

     <p> Enhance your living space with our range of humidifiers and car diffusers, designed to complement your environment with subtle aromas. Perfect for creating a soothing atmosphere at home or on the go.

      Experience luxury in every drop with our premium perfume oils, crafted from the finest ingredients to provide a long-lasting and distinctive scent.

      At <b>Scent By Anike</b>, we understand the power of a good smell. Whether you're shopping for yourself or looking for the perfect gift, our products promise to make every moment memorable. Join us in embracing the essence of luxury and style with scents that make you feel good. <br> <br>

    <b>EXPLORE OUR COLLECTION TODAY AND DISCOVER YOUR SIGNATURE SCENT. </b>
       </p>
      

       <h3>Customer Reviews</h3>
       
            <!-- Left-aligned media object -->
            <div class="row">
            <div class="media">
              
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

         
       </div>
 
      </main>
    

   <footer class="text-center">
     <a class="up-arrow" href="#about" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p><strong>Scent By Anike</strong></p>
        <a href="https://wa.me/message/ZHJH5PW4BLDIH1" title="WhatsApp"><i class="fa-brands fa-whatsapp whatsapp"></i></a>
         <a href="https://www.facebook.com/adeola.nasir.9?mibextid=ZbWKwL"  title="Facebook"><i class="fa-brands fa-facebook fb"></i></a>
         <a href="https://www.instagram.com/lady_anike?igsh=YTFpMmFwZWx6Y3Vy" title="Instagram"><i class="fa-brands fa-instagram ig"></i></a>
         <a href="https://www.tiktok.com/@lady_anike?_r=1&_d=edkhddibi2eala&sec_uid=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&share_author_id=6813977790288708614&sharer_language=en&source=h5_m&u_code=dblabealm8daag&timestamp=1717233817&user_id=6813977790288708614&sec_user_id=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7372492772902995718&share_link_id=bfd38fce-7b26-4690-9e59-47a56d959ff1&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb4907&social_share_type=5&enable_checksum=1" title="Tiktok"><i class="fa-brands fa-tiktok tik"></i></a>
         <p><small>&copy; scent by anike</small></p>
            
    </footer>


  <script>
    $(document).ready (function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  </body>
  </html>
  <?php } ?>