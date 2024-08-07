<?php
session_start();

            if (!isset($_SESSION['u_id'])) {
                echo"<script>window.open('login.php', '_self')</script>";
            }
            else {
          
 include ('mycon.php');
?>
<?php
if(isset($_GET['del_p'])) {
    $p_id = $_GET['del_p'];
    $del_query = "delete from all_product where p_id = $p_id";
    if(mysqli_query($con, $del_query)){
        echo "<script>alert('deleted successfully')</script>";
        echo "<script>window.open('all_product.php', '_self')</script>";
    }
} }
?>