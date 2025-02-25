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
    <h1>Halaman Edit Data Barang</h1>
    <?php
    include '../../Config/koneksi.php';
    $id_barang=$_GET['id_barang'];
    $query = mysqli_query($conn,"SELECT * FROM barang WHERE id_barang= '$id_barang'");
    $result=mysqli_fetch_array($query)
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="post">
        <h4>ID Barang</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="1" value="<?php echo $result['id_barang']?>" name="id_barang">
</div>
<h4>Nama barang</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Keyboard" value="<?php echo $result['nama_barang']?>" name="nama_barang">
</div>
<h4>Harga</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Rp. 1.000.000" value="<?php echo $result['harga']?>" name="harga">
</div>
<h4>Stok</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="10" value="<?php echo $result['stok']?>" name="stok">
</div>
<h4>ID Jenis</h4>
        <div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">#</span>
  <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="1-4" value="<?php echo $result['id_jenis']?>" name="id_jenis">
</div>
<br><br>

<button type="submit" class="btn btn-primary">Simpan</button>

    </form>
    </div>
    
</body>
</html>