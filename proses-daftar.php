<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];

$sql = "INSERT INTO `user`(username, password, email, namalengkap, alamat, jeniskelamin) VALUES('$username','$password','$email','$namalengkap','$alamat','$jeniskelamin')";
$result = mysqli_query($koneksi, $sql);
if ($result) {
  ?>
  <script>
    window.location.assign('login.php');
    alert('selamat anda berhasil daftar');
  </script>
  <?php
}