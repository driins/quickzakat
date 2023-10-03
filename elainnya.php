<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$id_mustahiklainnya = $_POST['id_mustahiklainnya'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$hak = $_POST['hak'];

//menginput data ke database 
$update = mysqli_query($koneksi, "UPDATE mustahik_lainnya SET nama='$nama',  kategori ='$kategori', hak='$hak' WHERE id_mustahiklainnya='$id_mustahiklainnya'");

//mengalihkan halaman kembali ke mustahik.php
header("location:distribusi_lainnya.php");
