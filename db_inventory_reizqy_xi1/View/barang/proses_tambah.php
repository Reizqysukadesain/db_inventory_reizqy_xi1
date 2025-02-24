<?php

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

include '../../Config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$nama_barang','$harga','$stok','$id_jenis')");

echo "
<script>
alert('Input Data Berhasil!! Silahkan Cek Kembali');
</script>
<script>
window.location.href = 'index.php';
</script>
";