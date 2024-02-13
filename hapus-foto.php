<?php 
include 'koneksi.php';
   $fotoid = $_GET['fotoid'];

  mysqli_query($koneksi,"DELETE FROM foto WHERE `fotoid`='$fotoid'");
   header("location:home.php");
