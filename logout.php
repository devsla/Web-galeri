<?php 
session_start();
session_destroy();
?>
<script>
  window.location.assign('login.php');
    alert('selamat anda berhasil logout');
</script>
