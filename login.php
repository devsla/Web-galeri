<?php include './template/log-header.php' ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-6">
        <div class="card">
        <div class="card-body">
            <form action="proses-login.php" method="post">
            <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password">
            </div>
            <button class="btn btn-primary" type="submit">Login </button>
            </form>
            <a href="daftar.php" class="">silahkan daftar jika belum mempunyai akun</a>
    </div>
        </div>
    </div>
    
</div>
<?php include './template/footer.php' ?>