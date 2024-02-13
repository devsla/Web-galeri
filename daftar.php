<?php include './template/log-header.php' ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
    <div class="card mb-3">
        <div class="card-body">
        <form action="proses-daftar.php" method="post">
            <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="Email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
            <label for="namalengkap" class="form-label">namalengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
            </div>
            <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jeniskelamin">
            <option selected>Pilih jenis kelamin</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
            </select>
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