<?php include './template/header.php'; ?>
<!-- Modal -->
<div class="container mt-4">
  <div class="container-fluid">
    <div class="row">
      <div class="card">
        <div class="card-header">
      <a href="tambah-album.php">tambah</a>
      
        </div>
        <div class="card-body">
        <table class="table table-bordered">

        <thead>
          <tr>
            <th>Nama album</th>
            <th>deskripsi</th>
            <th>tanggal</th>
            <th>userid</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'koneksi.php';
          session_start();
          $sql=mysqli_query($koneksi, "SELECT * FROM `album` AS `a` INNER JOIN user AS u ON a.userid=u.userid;");
          while ($data = mysqli_fetch_array($sql)) {
          ?>
          <tr>
            <td><?= $data['namaalbum']; ?></td>
            <td><?= $data['deskripsi']; ?></td>
            <td><?= $data['tanggaldibuat']; ?></td>
            <td><?= $data['namalengkap']; ?></td>
            <td>
            <a href="edit-album.php?albumid=<?= $data['albumid']; ?>">edit</a>
            <a href="hapus-album.php?albumid=<?= $data['albumid']; ?>" onclick="return confirm('apakah kamu yakin menghapus ini?');">hapus</a>
            
            </td>
          </tr>
                    
          <?php } ?>
        </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './template/footer.php'; ?>