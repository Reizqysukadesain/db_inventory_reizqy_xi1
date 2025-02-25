<?php

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_jenis = $_POST['id_jenis'];

include '../../Config/koneksi.php';
$query = mysqli_query($conn,"UPDATE barang SET nama_barang= '$nama_barang', harga= '$harga', stok= '$stok', id_jenis= '$id_jenis'
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Edit data sukses!!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Edit data gagal')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}