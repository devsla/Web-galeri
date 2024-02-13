<?php include './template/log-header.php'; ?>
<?php
include 'koneksi.php';
$sql=mysqli_query($koneksi, "SELECT * FROM foto AS `a` INNER JOIN user AS u ON a.userid=u.userid;");
 while ($data = mysqli_fetch_array($sql)) {
?>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <a href="login.php"><img src="img/<?= $data['lokasifile'];?>" class="card-img-top" alt="img/<?= $data['lokasifile'];?>"></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $data['judulfoto'];?></h5>
                    <p class="card-text"><?= $data['tanggalunggah'];?></p>
                </div>
                </div>
        </div>
    </div>
</div>
<?php } ?>
<?php include './template/footer.php'; ?>