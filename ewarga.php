<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$id_mustahikwarga = $_POST['id_mustahikwarga'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$hak = $_POST['hak'];

//menginput data ke database 
$update = mysqli_query($koneksi, "UPDATE mustahik_warga SET nama='$nama', kategori='$kategori', hak='$hak' WHERE id_mustahikwarga='$id_mustahikwarga'");

//mengalihkan halaman kembali ke muzakki.php
header("location:distribusi_warga.php");
