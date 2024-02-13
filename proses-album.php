<?php
session_start();
include 'koneksi.php';

$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$tanggaldibuat = date("Y-m-d");
$userid = $_SESSION['userid'];

$sql = "INSERT INTO `album`(namaalbum, deskripsi, tanggaldibuat, userid) VALUES('$namaalbum','$deskripsi','$tanggaldibuat','$userid')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
  ?>
  <script>
    window.location.assign('album.php');
    alert('selamat anda berhasil menambahkan album');
  </script>
  <?php
}