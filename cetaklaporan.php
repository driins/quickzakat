<?php
include('koneksi.php');
$total = mysqli_query($koneksi, "SELECT * FROM muzakki");
$total = mysqli_num_rows($total);
$jiwa = mysqli_query($koneksi, "SELECT SUM(jumlah_tanggungan) AS total_jiwa FROM muzakki");
$jiwa = mysqli_fetch_assoc($jiwa);
$beras = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayarzakat");
$beras = mysqli_fetch_assoc($beras);
$uang = mysqli_query($koneksi, "SELECT SUM(bayar_uang) AS total_uang FROM bayarzakat");
$uang = mysqli_fetch_assoc($uang);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<p style= text-align: center; font-weight:bold; font-size: 24px;">Laporan Pengumpulan Zakat Fitrah</p>
        <table width="100%" border = "1">
                    <thead class="table-light style=" border-top: 2px solid #000;">
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Total Muzakki</th>
                            <td>:</td>
                            <td><?= $total; ?> Kepala Keluarga</td>
                        </tr>
                        <tr>
                            <th scope="row">Total Jiwa</th>
                            <td>:</td>
                            <td><?= $jiwa['total_jiwa']; ?> Jiwa</td>
                        </tr>
                        <tr>
                            <th scope="row">Total Zakat Beras</th>
                            <td>:</td>
                            <td><?= $beras['total_beras']; ?> Kg</td>
                        </tr>
                        <tr>
                            <th scope="row">Total Zakat Uang</th>
                            <td>:</td>
                            <td>Rp<?php $number = $uang['total_uang'];
                                    $formattedNumber = number_format($number, 2, '.', ',');
                                    echo $formattedNumber; ?></td>
                        </tr>
                    </tbody>
                </table>