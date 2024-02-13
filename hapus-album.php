<?php 
include 'koneksi.php';
   $albumid = $_GET['albumid'];

  mysqli_query($koneksi,"DELETE FROM album WHERE `albumid`='$albumid'");
   header("location:album.php");

?>