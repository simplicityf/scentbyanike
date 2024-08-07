<?php
session_start();

            if (!isset($_SESSION['u_id'])) {
                echo"<script>window.open('login.php', '_self')</script>";
            }
            else {
          
 include ('mycon.php');
?>
<?php
if(isset($_GET['del_b'])) {
    $b_id = $_GET['del_b'];
    $del_query = "delete from all_blog where b_id = $b_id";
    if(mysqli_query($con, $del_query)){
        echo "<script>alert('deleted successfully')</script>";
        echo "<script>window.open('all_blog.php', '_self')</script>";
    }
}
            }
?>