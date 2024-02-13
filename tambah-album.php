<?php include './template/log-header.php' ?>
<?php
session_start();
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
    <div class="card mb-3">
        <div class="card-body">
        <form action="proses-album.php" method="post">
            <div class="mb-3">
            <label for="namaalbum" class="form-label">namaalbum</label>
            <input type="text" class="form-control" id="namaalbum" name="namaalbum">
            </div>
            <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>
            
            <button class="btn btn-primary" type="submit">Daftar</button>
            </form>
            </form>
        </div>
    </div>
    </div>
    </div>
</div>
<?php include './template/footer.php' ?>