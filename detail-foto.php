<?php include './template/header.php'; 
$fotoid = $_GET['fotoid'];
?>
<?php
include 'koneksi.php';
$sql=mysqli_query($koneksi, "SELECT * FROM foto WHERE fotoid=$fotoid");
 while ($data = mysqli_fetch_array($sql)) {
?>
<div class="container mt-4">
        <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="img/<?= $data['lokasifile']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title" value="<?= $data['namalengkap']; ?>"></h4>
                <h5 class="card-title"><?= $data['judulfoto']; ?></h5>
                <p class="card-text"><small class="text-body-secondary"><?= $data['tanggalunggah']; ?></small></p>
                <p class="card-text"><?= $data['deskripsifoto'] ?></p>
            </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php include './template/footer.php'; ?>