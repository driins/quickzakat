<?php
$id = $_REQUEST['id_mustahikwarga'];
include('header.php');
include('koneksi.php');
$warga = mysqli_query($koneksi, "SELECT * FROM mustahik_warga where id_mustahikwarga = $id");
$warga = mysqli_fetch_array($warga);

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Warga</h1>
    <form method="POST" action="ewarga.php">
        <input type="hidden" name="id_mustahikwarga" value="<?= $warga['id_mustahikwarga']; ?>">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-10">
                <input type="text" value="<?= $warga['nama']; ?>" class="form-control" id="inputText3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" value="<?= $warga['kategori']; ?>" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                    <option hidden selected>Pilih Kategori</option>
                    <option value="Fakir">Fakir</option>
                    <option value="Miskin ">Miskin</option>
                    <option value="Mampu">Mampu</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $warga['hak']; ?>" id="inputText3" name="hak">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>