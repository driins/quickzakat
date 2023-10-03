<?php
//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form 
$nama_muzakki = $_POST['nama_muzakki'];
$kategori = $_POST['kategori'];
$hak = $_POST['hak'];

//menginput data ke database 

//menginput data ke database 
$insert = mysqli_query($koneksi, "INSERT INTO mustahik_warga (nama, kategori, hak) VALUES ('$nama_muzakki', '$kategori', '$hak')");

//mengalihkan halaman kembali ke distribusi_warga.php
header("location:distribusi_warga.php");
