<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">Jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view_tambah.php">Tambah Barang</a></li>
            <li><a class="dropdown-item" href="../jenis/view_tambah.php">Tambah Jenis</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Lainnya</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Data Barang</h1>
    <a class="btn btn-primary" href="view_tambah.php" role="button">Tambah Barang</a>

    <br><br>
    <table class="table table-striped table-hover" border="1">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">ID Jenis</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
  include '../../Config/koneksi.php';
  $query = mysqli_query($conn, "SELECT * FROM barang");
  $no=1;
  if(mysqli_num_rows($query)) {
    while($result=mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $result['id_barang'];?></td>
                            <td><?php echo $result['nama_barang'];?></td>
                            <td><?php echo $result['harga'];?></td>
                            <td><?php echo $result['stok'];?></td>
                            <td><?php echo $result['id_jenis'];?></td>
                            <td>
                            <a class="btn btn-warning" href="view_edit.php?id_barang=<?php echo $result['id_barang']?>"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                            <a class="btn btn-danger" href="proses_hapus.php?id_barang=<?php echo $result['id_barang']?>" onclick="return confirm('Kamu yakin?')"><i class="fa-solid fa-trash"></i>Hapus</a>
                            </td>
        </tr>
        <?php
    }
}
  ?>
  
</table>
    </div>

</body>
</html>