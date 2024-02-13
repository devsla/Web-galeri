<?php include './template/header.php';?>
<?php 
session_start();
if (!isset($_SESSION['userid'])) {
   header("location=login.php");
}

?>
<br>
<div class="container">
<?php
include 'koneksi.php';
$sql=mysqli_query($koneksi, "SELECT * FROM foto,user WHERE foto.userid=user.userid");
 while ($data = mysqli_fetch_array($sql)) {
?>

<?php } ?>

<?php include './template/footer.php';?>
