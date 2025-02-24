<?php

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../Config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO jenis VALUES('$id_jenis','$nama_jenis')");

echo "
<script>
alert('Input Data Berhasil!! Silahkan Cek Kembali');
</script>
<script>
window.location.href = 'index.php';
</script>
";