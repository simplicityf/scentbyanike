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

  <!--favicon icon-->
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

   <main id="shop">
    <div class="container">
            
            
            <?php include('topnav.php'); ?>
            
     
        <div class="items grid1">
         <h4 class="shop2">Save 25% of on all <br> items collection.</h4>
          <img src="img/perfcol.jpg" alt="img"
             class="img-responsive" id="img2">
         </div>
             
     <br>
     <br>
    
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="search" id="filter" onkeyup="search();">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
              </div>
  
        <br>
        <br>


    <div id="card-list">
      <div class="container">
         <div class="row">
         <?php 
         $query = "select * from all_product";
         $object = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($object)){
          ?>

<div class="col-sm-4 col-lg-3">
     <div class="card thumbnail text-center height">
      <img class="card-img-top imgheight" src="imgs/<?php echo $row['p_picture']; ?>" alt="img">
      <div class="card-body">
       <div class="boddy">
      <h4 class="card-title"><strong><?php echo $row['p_product_name']; ?></strong></h4>
      <p class="card-title"><strong>#<?php echo $row['p_product_price']; ?></strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
       </div>
        </div>
         </div>
         </div>
         <?php } ?>
            
     <div class="col-sm-4 col-lg-3">
       <div class="card thumbnail text-center height">
        <img class="card-img-top imgheight" src="img/mosuf.jpg" alt="img">
        <div class="card-body">
          <div class="boddy">
      <h4 class="card-title"><strong>Mousuf</strong></h4>
      <p class="card-text"><strong>#18500</strong></p>
       <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
    </div>
    </div>
    </div>
    </div>
                  
    <div class="col-sm-4 col-lg-3">
    <div class="card thumbnail text-center height">
     <img class="card-img-top imgheight" src="img/mosuf2.jpg" alt="img">
      <div class="card-body">
        <div class="boddy">
        <h4 class="card-title"><strong>Mousuf</strong></h4>
        <p class="card-text"><strong>#18500</strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
      </div>
       </div> 
       </div>        
       </div>
            
    <div class="col-sm-4 col-lg-3">
    <div class="card thumbnail text-center height">
     <img class="card-img-top imgheight" src="img/mosuf3.jpg" alt="img">
      <div class="card-body">
        <div class="boddy">
        <h4 class="card-title"><strong>Mousuf</strong></h4>
        <p class="card-text"><strong>#10000</strong></p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
      </div>
       </div>
       </div>
       </div>
            
            
     <div class="col-sm-4 col-lg-3">
      <div class="card thumbnail text-center height">
       <img class="card-img-top imgheight" src="img/mousuf.jpg" alt="img">
        <div class="card-body">
          <div class="boddy">
       <h4 class="card-title"><strong>Mousuf</strong></h4>
        <p class="card-text"><strong>#20000</strong></p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
         </div>
          </div>
          </div>
          </div>
            
            
      <div class="col-sm-4 col-lg-3">
       <div class="card thumbnail text-center height">
       <img class="card-img-top imgheight" src="img/al_awwal.jpg" alt="img">
       <div class="card-body">
        <div class="boddy">
       <h4 class="card-title"><strong>AL_Awwal</strong></h4>
        <p class="card-text"><strong>#8000</strong></p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
          </div>
         </div>
        </div>
        </div>
            
            
     <div class="col-sm-4 col-lg-3">
      <div class="card thumbnail text-center height">
     <img class="card-img-top imgheight" src="img/arabibya_100ml.jpg" alt="img">
      <div class="card-body">
        <div class="boddy">
     <h4 class="card-title"><strong>Arabibya_100ml</strong></h4>
      <p class="card-text"><strong>#6000</strong></p>
       <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
        </div>
       </div>
      </div>
      </div>


     <div class="col-sm-4 col-lg-3">
      <div class="card thumbnail text-center height">
       <img class="card-img-top imgheight" src="img/hayati.jpg" alt="img">
      <div class="card-body">
        <div class="boddy">
         <h4 class="card-title"><strong>Hayati</strong></h4>
            <p class="card-text"><strong>#20000</strong></p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
          </div>
          </div>
          </div>
          </div>


          <div class="col-sm-4 col-lg-3">
            <div class="card thumbnail text-center height">
            <img class="card-img-top imgheight" src="img/hayati2.jpg" alt="img">
            <div class="card-body">
              <div class="boddy">
             <h4 class="card-title"><strong>Hayati</strong></h4>
              <p class="card-text"><strong>#20000</strong></p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
             </div>
             </div>
             </div>
             </div>


         <div class="col-sm-4 col-lg-3">
            <div class="card thumbnail text-center height">
              <img class="card-img-top imgheight" src="img/100ml_perfume_oil.jpg" alt="img">
              <div class="card-body">
                <div class="boddy">
            <h4 class="card-title"><strong>100ml_perfume_oil</strong></h4>
            <p class="card-text"><strong>#15000</strong></p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
            </div>
            </div>
            </div>
            </div>

      <div class="col-sm-4 col-lg-3">
          <div class="card thumbnail text-center height">
          <img class="card-img-top imgheight" src="img/50ml_perfume_oil.jpg" alt="img">
         <div class="card-body">
          <div class="boddy">
          <h4 class="card-title"><strong>50ml_perfume_oil</strong></h4>
         <p class="card-text"><strong>#8500</strong></p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
            </div>
             </div>
             </div>
             </div>


      <div class="col-sm-4 col-lg-3">
        <div class="card thumbnail text-center height">
        <img class="card-img-top imgheight" src="img/body_oil.jpg" alt="img">
       <div class="card-body">
        <div class="boddy">
       <h4 class="card-title"><strong>3ml_perfume_oil</strong></h4>
       <p class="card-text"><strong>#1000</strong></p>
       <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
      </div>
      </div>
      </div>
      </div>
                            
      <div class="col-sm-4 col-lg-3">
        <div class="card thumbnail text-center height">
         <img class="card-img-top imgheight" src="img/cool_girl.jpg" alt="img">
          <div class="card-body">
            <div class="boddy">
          <h4 class="card-title"><strong>Cool Girl</strong></h4>
          <p class="card-text"><strong>#5000</strong></p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
           </div>
           </div>
           </div>
           </div> 
           
        <div class="col-sm-4 col-lg-3">
          <div class="card thumbnail text-center height">
             <img class="card-img-top imgheight" src="img/kid_storm.jpg" alt="img">
              <div class="card-body">
                <div class="boddy">
              <h4 class="card-title"><strong>Kid_storm</strong></h4>
              <p class="card-text"><strong>#3000</strong></p>
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
               </div>
               </div>
               </div>
               </div>

        <div class="col-sm-4 col-lg-3">
          <div class="card thumbnail text-center height">
            <img class="card-img-top imgheight" src="img/storm_kid2.jpg" alt="img">
               <div class="card-body">
                <div class="boddy">
              <h4 class="card-title"><strong>Kid_storm</strong></h4>
               <p class="card-text"><strong>#3000</strong></p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
                  </div>
                   </div>
                   </div>
                   </div>

          <div class="col-sm-4 col-lg-3">
            <div class="card thumbnail text-center height">
             <img class="card-img-top imgheight" src="img/combo.jpg" alt="img">
               <div class="card-body">
                 <div class="boddy">
              <h4 class="card-title"><strong>Combo</strong></h4>
              <p class="card-text"><strong>#25000</strong></p>
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
               </div>
               </div>
               </div>
               </div>


       <div class="col-sm-4 col-lg-3">
        <div class="card thumbnail text-center height">
         <img class="card-img-top imgheight" src="img/combo2.jpg" alt="img">
          <div class="card-body">
            <div class="boddy">
          <h4 class="card-title"><strong>Combo</strong></h4>
          <p class="card-text"><strong>#20000</strong></p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
           </div>
           </div>
           </div>
           </div>
             
           </div>
           </div>
           </div>
           

           <div class="text-center" id="view2" >
            <button type="button" class="btn btn-primary" onclick="viewMore()"> View More
              </button>
              </div>
           
    
    
    <div id="view3">
    <div class="container">
       <div class="row">
          
          
   <div class="col-sm-4 col-lg-3">
     <div class="card thumbnail text-center height">
      <img class="card-img-top imgheight" src="img/opulent_oud.jpg" alt="img">
      <div class="card-body">
        <div class="boddy">
    <h4 class="card-title"><strong>opulent_oud</strong></h4>
    <p class="card-text"><strong>#7000</strong></p>
     <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
  </div>
  </div>
  </div>
  </div>
                
  <div class="col-sm-4 col-lg-3">
  <div class="card thumbnail text-center height">
   <img class="card-img-top imgheight" src="img/gk_men.jpg" alt="img">
    <div class="card-body">
      <div class="boddy">
      <h4 class="card-title"><strong>GK_men</strong></h4>
      <p class="card-text"><strong>#10000</strong></p>
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
    </div>
     </div> 
     </div>        
     </div>
          
  <div class="col-sm-4 col-lg-3">
  <div class="card thumbnail text-center height">
   <img class="card-img-top imgheight" src="img/intense_man.jpg" alt="img">
    <div class="card-body">
      <div class="boddy">
      <h4 class="card-title"><strong>Intense_man</strong></h4>
      <p class="card-text"><strong>#11000</strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
    </div>
     </div>
     </div>
     </div>
          
          
   <div class="col-sm-4 col-lg-3">
    <div class="card thumbnail text-center height">
     <img class="card-img-top imgheight" src="img/karamrah_30ml.jpg" alt="img">
      <div class="card-body">
        <div class="boddy">
     <h4 class="card-title"><strong>Karamrah_30ml</strong></h4>
      <p class="card-text"><strong>#2500</strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
       </div>
        </div>
        </div>
        </div>
          
          
    <div class="col-sm-4 col-lg-3">
     <div class="card thumbnail text-center height">
     <img class="card-img-top imgheight" src="img/monaya_100ml.jpg" alt="img">
     <div class="card-body">
      <div class="boddy">
     <h4 class="card-title"><strong>Monaya_100ml</strong></h4>
      <p class="card-text"><strong>#8000</strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
        </div>
       </div>
      </div>
      </div>
          
          
   <div class="col-sm-4 col-lg-3">
    <div class="card thumbnail text-center height">
   <img class="card-img-top imgheight" src="img/pendora_bodymist.jpg" alt="img">
    <div class="card-body">
      <div class="boddy">
   <h4 class="card-title"><strong>Pendora_bodymist</strong></h4>
    <p class="card-text"><strong>#6000</strong></p>
     <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
      </div>
     </div>
    </div>
    </div>


   <div class="col-sm-4 col-lg-3">
    <div class="card thumbnail text-center height">
     <img class="card-img-top imgheight" src="img/ramz_lattafa_gold.jpg" alt="img">
    <div class="card-body">
      <div class="boddy">
       <h4 class="card-title"><strong>Ramz_Lattafa_Gold</strong></h4>
          <p class="card-text"><strong>#12000</strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
        </div>
        </div>
        </div>
        </div>


        <div class="col-sm-4 col-lg-3">
          <div class="card thumbnail text-center height">
          <img class="card-img-top imgheight" src="img/scandal_100ml.jpg" alt="img">
          <div class="card-body">
            <div class="boddy">
           <h4 class="card-title"><strong>Scandal_100ml</strong></h4>
            <p class="card-text"><strong>#10000</strong></p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
           </div>
           </div>
           </div>
           </div>


       <div class="col-sm-4 col-lg-3">
          <div class="card thumbnail text-center height">
            <img class="card-img-top imgheight" src="img/shamokhi_100ml.jpg" alt="img">
            <div class="card-body">
              <div class="boddy">
          <h4 class="card-title"><strong>Shamokhi_100ml</strong></h4>
          <p class="card-text"><strong>#15000</strong></p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
          </div>
          </div>
          </div>
          </div>

    <div class="col-sm-4 col-lg-3">
        <div class="card thumbnail text-center height">
        <img class="card-img-top imgheight" src="img/wave_escape_bodymist.jpg" alt="img">
       <div class="card-body">
        <div class="boddy">
        <h4 class="card-title"><strong>Wave_Escape_Bodymist</strong></h4>
       <p class="card-text"><strong>#6000</strong></p>
      <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Buy</button>
          </div>
           </div>
           </div>
           </div>
          </div>

               
         </div>
         </div>
       
      
         

         <div class="text-center" id="view1">
          <button type="button" class="btn btn-primary" onclick="viewLess()"> View Less
            </button>
            </div>
 
            
                <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4><span class="glyphicon glyphicon-shopping-cart"></span>Shop</h4>
                    </div>
            
            
              <div class="modal-body">
                <h3><strong>Customer Info</strong>
                <br><small>PLEASE PROVIDE CORRECT DETAILS</small></h3>


                <form method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                 <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email*</label>
                 <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                      
                      
                      <hr>
            
              <h3><strong>Shipping Address</strong></h3>
                <div class="row">
                
                  <div class="col-sm-6">
                <div class="form-group">
                <label for="name"><span class="glyphicon glyphicon-user"></span>Full Name*</label>
                <input type="text" class="form-control" id="name" name="fullname" required>
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="address"><span class="glyphicon glyphicon-road"></span>Address*</label>
                <input type="text" class="form-control" id="address" name="address" required>
                </div>
                </div>

            
                <div class="col-sm-6">
              <div class="form-group">
               <label for="city"><span class="glyphicon glyphicon-"></span>City*</label>
               <input type="text" class="form-control" id="city" name="city" required>   
              </div>
              </div>
                      
              <div class="col-sm-6">
              <div class="form-group">
              <label for="state"><span class="glyphicon glyphicon-"></span>State*</label>
              <input type="text" class="form-control" id="state" name="state" required>   
               </div>
               </div>

               <div class="col-sm-6">
              <div class="form-group">
              <label for="pname"><span class="glyphicon glyphicon-"></span>Name of Product</label>
              <input type="text" class="form-control" id="pname" name="pname" required>   
               </div>
               </div>

               <div class="col-sm-6">
              <div class="form-group">
              <label for="phone"><span class="glyphicon glyphicon-"></span>Phonenumber <small>Preferably WhatsApp</small></label>
              <input type="tel" class="form-control" id="phone" name="phone" required>   
               </div>
               </div>

               <div class="col-sm-6">
              <div class="form-group">
              <label for="note"><span class="glyphicon glyphicon-"></span>Short Note <small>(optional)</small></label>
              <textarea class="form-control" id="note" name="note" placeholder="Short note" rows="3"></textarea>
               </div>
               </div>
            
               
               </div>

              <input type="submit" class="btn-block btn-primary" name="order" value="order">
              
              </form>
              <?php 
              if(isset($_POST['order'])){
                $o_email = $_POST['email'];
                $o_fullname = $_POST['fullname'];
                $o_address = $_POST['address'];
                $o_city = $_POST['city'];
                $o_state = $_POST['state'];
                $o_pname = $_POST['pname'];
                $o_phone = $_POST['phone'];
                $o_note = $_POST['note'];
                
                 
                  //$query = "select p_picture from all_product";
                  //$object = mysqli_query($con, $query);
                  //while($row = mysqli_fetch_array($object)){
                  //$o_picture = $row['p_picture'];
            
                $query_sel = "insert into all_order (o_email, o_fullname, o_address, o_city, o_state, o_product_name, o_phone, o_note)
                         values ('$o_email', '$o_fullname', '$o_address', '$o_city', '$o_state', '$o_pname', '$o_phone', '$o_note')";
                           if(mysqli_query($con, $query_sel)) {
                             echo "<script>alert('order sent')</script>";
                            echo "<script>window.open('shop.php', '_self')</script>";
              }
            }
              ?>
                  </div>
             <div class="modal-footer">
               <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
               <span class="glyphicon glyphicon-globe"></span> Cancel
                </button>
                <p class="btn-warning"><strong>Please note delivery within Ibadan takes 1-2working days and outside Ibadan takes 1-3working days</strong></p>
              </div>
                </div>
                </div>
                </div>
                </div>
                </main>
    


            
            <footer class="text-center">
              <a class="up-arrow" href="#shop" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
              </a><br><br>
              <p><strong>Scent By Anike</strong></p>
              <div>
              <a href="https://wa.me/message/ZHJH5PW4BLDIH1" title="WhatsApp">
               <i class="fa-brands fa-whatsapp whatsapp"></i></a>
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
    <?php } ?>