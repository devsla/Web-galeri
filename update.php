<?php 
include 'koneksi.php';
$albumid = $_POST['albumid'];
$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$tanggaldibuat = $_POST['tanggaldibuat'];
$userid = $_POST['userid'];

mysqli_query($koneksi, "update album set `namaalbum`='$namaalbum', `deskripsi`='$deskripsi', `tanggaldibuat`='$tanggaldibuat',`userid`='$userid' WHERE `albumid`='$albumid'");
header("location:album.php");