<?php
$id = $_REQUEST['id_zakat'];
include('koneksi.php');
include('header.php');
$zakat = mysqli_query($koneksi, "SELECT * FROM bayarzakat where id_zakat = $id");
$zakat = mysqli_fetch_array($zakat);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Pembayaran Zakat</h1>
    <form method="POST" action="epengumpulan.php">
        <input type="hidden" name="id_zakat" value="<?= $zakat['id_zakat']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki/KK</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $zakat['nama_KK']; ?>" class="form-control" id="inputText3" name="nama_KK">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
            <div class="col-sm-10">
                <input type="text" value="<?= $zakat['jumlah_tanggungan']; ?>" class="form-control" id="inputText3" name="jumlah_tanggungan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Bayar</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputText3" name="jenis_bayar">
                    <option value="beras">Beras</option>
                    <option value="uang">Uang</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan Yang Dibayar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="jumlah_tanggunganyangdibayar">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Beras</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="bayar_beras">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Uang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="bayar_uang">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>

<?php include('footer.php') ?>