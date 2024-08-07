<?php
session_start();

            if (!isset($_SESSION['u_id'])) {
                echo"<script>window.open('login.php', '_self')</script>";
            }
            else {
          
 include ('mycon.php');
?>
<?php
if(isset($_GET['del_o'])) {
    $o_id = $_GET['del_o'];
    $del_query = "delete from all_order where o_id = $o_id";
    if(mysqli_query($con, $del_query)){
        echo "<script>alert('deleted successfully')</script>";
        echo "<script>window.open('orders.php', '_self')</script>";
    }
} }
?>