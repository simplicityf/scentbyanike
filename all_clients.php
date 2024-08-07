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
            <th>FullName</th>
            <th>Email</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Phone No.</th>
            <th>Profile Pic</th>
            <th>Admin</th>
            <th>Other</th>
        </tr>
    </thead>

    <?php 
    $all_clients = "select * from all_clients";
    $object = mysqli_query ($con, $all_clients);
    while($row = mysqli_fetch_array($object)) {

    
    ?>

    <tbody id="myTable">
        <tr>
            <td><?php echo $row['u_FullName']; ?></td>
            <td><?php echo $row['u_Email']; ?></td>
            <td><?php echo $row['u_Country']; ?></td>
            <td><?php echo $row['u_State']; ?></td>
            <td><?php echo $row['u_City']; ?></td>
            <td><?php echo $row['u_Phone_no']; ?></td>
            <td>
                <img class="img-circle" src="imgs/<?php echo $row['u_Profile_Pic']; ?>" alt="img" width="40px" height="40px">
            
            </td>
            <td><?php echo $row['u_Admin']; ?></td>
            <td>
                <a href="edit_all_clients.php?edit_c=<?php echo $u_id; ?>" title="Edit">&#128221;</a>
                <a href="delclients.php?del_c=<?php echo $u_id; ?>" title="Delete">&#128465;</a>
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
    <?php } ?>