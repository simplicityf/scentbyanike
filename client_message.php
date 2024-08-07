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
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>User</th>
            <th>Date</th>
        </tr>
    </thead>
    <?php 
         $order = "select * from all_message";
          $object = mysqli_query ($con, $order);
           while($row = mysqli_fetch_array($object)) {
            $m_name = $row['m_name'];
            $m_email = $row['m_email'];
            $m_message = $row['m_message'];
            $m_exta = $row['m_extra'];
            $m_date = $row['m_date'];

            $orderm = "select * from all_clients where u_id = '$m_extra'";
            $objectm = mysqli_query ($con, $order);
             $few = mysqli_fetch_array($objectm)
    ?>
    <tbody id="myTable">
        <tr>
            <td><?php echo $m_name; ?></td>
            <td><?php echo $m_email; ?></td>
            <td><?php echo $m_message; ?></td>
            <td><?php echo $few['u_FullName']; ?></td>
            <td><?php echo $m_date; ?></td>
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