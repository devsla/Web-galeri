<?php 
include 'koneksi.php';
if (!isset($_SESSION['userid'])) {
    //like harus login dulu
}else{
    $fotoid = $_GET['fotoid'];
    $userid = $_GET['userid'];
    $sql = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'"); 
    if (mysqli_num_rows($sql)==1) {
       header("location:home.php");
    }else {
        $tanggallike = date("Y-m-d");
        mysqli_query($koneksi, "INSERT INTO likefoto VALUES('$fotoid','$userid','$tanggallike')");
        header("location:home.php");
    }
}