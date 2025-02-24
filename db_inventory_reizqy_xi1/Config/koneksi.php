<?php
//variable
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'db_inventory_reizqy_xi1';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die('Koneksi gagal' . mysqli_connect_error());
}
?>