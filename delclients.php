<?php
session_start();

            if (!isset($_SESSION['u_id'])) {
                echo"<script>window.open('login.php', '_self')</script>";
            }
            else {
          
 include ('mycon.php');
?>
<?php
if(isset($_GET['del_c'])) {
    $u_id = $_GET['del_c'];
    $del_query = "delete from all_clients where u_id = $u_id";
    if(mysqli_query($con, $del_query)){
        echo "<script>alert('deleted successfully')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }
} }
?>