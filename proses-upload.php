<?php 
ini_set('display_error',1);
error_reporting(E_ALL);
include 'koneksi.php';
session_start();

    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $tanggalunggah = date("Y-m-d");
    $albumid = $_POST['albumid'];
    $userid = $_SESSION['userid'];

    $rand = rand();
    $ekstensi = array('png','jpg','jpeg');
    $filename = $_FILES['lokasifile']['name'];
    $ukuran = $_FILES['lokasifile']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $xx = $rand.'_'.$filename;
    $upload = move_uploaded_file($_FILES['lokasifile']['tmp_name'],'img/'.$rand. '_'. $filename);
    mysqli_query($koneksi, "INSERT INTO foto  VALUES(NULL,'$judulfoto','$deskripsifoto','$tanggalunggah','$xx','$albumid','$userid')");
    header("location:index.php");
    if (!$upload) {
       print_r($_FILES['lokasifile']['error']);
       header("location:index.php");
    }