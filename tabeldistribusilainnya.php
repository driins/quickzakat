<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$hak = $_POST['hak'];

//menginput data ke database 
$insert=mysqli_query($koneksi, "insert into mustahik_lainnya (nama, kategori, hak) values ('$nama', '$kategori', '$hak')");

//mengalihkan halaman kembali ke distribusi_lainnya.php
header("location:distribusi_lainnya.php")
?>