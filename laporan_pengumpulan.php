<?php include('header.php'); ?>
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

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan Pengumpulan Zakat Fitrah</h1>
    <p class="mb-4">Laporan Zakat Fitrah / Laporan Pengumpulan<a target="_blank" href=> </a>.</p>
    <div>
        <a href="printlaporan.php" class="btn btn-rounded btn-outline-primary" target="_blank">
            Export to PDF
        </a>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-light style=" border-top: 2px solid #000;">
                        <tr>
                            <th scope="col" colspan="5" class="text-center display-6">Laporan Pengumpulan Zakat</th>
                        </tr>
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
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->


    <?php include('footer.php') ?>