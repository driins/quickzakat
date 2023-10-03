<?php
//koneksi database
include 'koneksi.php';

//ambil nilai id dari parameter URL
$id_mustahikwarga = $_GET['id_mustahikwarga'];

//hapus data dari tabel kategori_mustahik berdasarkan id
$delete = mysqli_query($koneksi, "DELETE FROM mustahik_warga WHERE id_mustahikwarga = '$id_mustahikwarga'");

//cek apakah penghapusan berhasil dilakukan
if ($delete) {
    //jika berhasil, alihkan pengguna kembali ke halaman awal dan tampilkan pesan sukses
    echo "<script>alert('Data berhasil dihapus');</script>";
    header("location:distribusi_warga.php");
} else {
    //jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($koneksi);
}

//tutup koneksi ke database
mysqli_close($koneksi);
