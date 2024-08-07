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
<input class="form-control" id="myInput" type="text" placeholder="search">
<br>
<table class="table table-boarded table-striped table-responsive">
    <thead>
        <tr>
            <th>Email</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Product Name</th>
            <th>client Number</th>
            <th>Short Note</th>
        </tr>
    </thead>
    <?php 
         $order = "select * from all_order";
          $object = mysqli_query ($con, $order);
           while($row = mysqli_fetch_array($object)) {
            $o_email = $row ['o_email'];
            $o_fullname = $row ['o_fullname'];
            $o_address = $row ['o_address'];
            $o_city = $row ['o_city'];
            $o_state = $row ['o_state'];
            $o_pname = $row['o_product_name'];
            $o_phone = $row['o_phone'];
            $o_note = $row['o_note'];
            $o_id = $row['o_id'];

    ?>
    <tbody id="myTable">
        <tr>
            <td><?php echo $o_email; ?></td>
            <td><?php echo $o_fullname; ?></td>
            <td><?php echo $o_address; ?></td>
            <td><?php echo $o_city; ?></td>
            <td><?php echo $o_state; ?></td>
            <td><?php echo $o_pname; ?></td>
            <td><?php echo $o_phone; ?></td>
            <td><?php echo $o_note; ?></td>
            <td>
            <a href="shop.php?p_id=<?php echo $o_id; ?>" title="view">&#128065;</a>
            <a href="delorder.php?del_o=<?php echo $o_id; ?>" title="Delete">&#128465;</a>
            </td>
        </tr>
    </tbody>
    <?php } ?>
</table>



    </div>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup",function(){
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    </body>
    </html>
    <?php }?>