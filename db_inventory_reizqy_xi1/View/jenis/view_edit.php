<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</head>
<body>
    <div class="container">
    <h1>Halaman Edit Data Jenis</h1>
    <?php
    include '../../Config/koneksi.php';
    $id_jenis=$_GET['id_jenis'];
    $query = mysqli_query($conn,"SELECT * FROM jenis WHERE id_jenis= '$id_jenis'");
    $result=mysqli_fetch_array($query)
    ?>
    <form action="proses_edit.php?id_jenis=<?php echo $result['id_jenis']?>" method="post">
        <h4>ID Jenis</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="1" value="<?php echo $result['id_jenis']?>" name="id_jenis">
</div>
<h4>Nama Jenis</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Perangkat" value="<?php echo $result['nama_jenis']?>" name="nama_jenis">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    </div>
    
</body>
</html>