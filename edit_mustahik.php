<?php
$id = $_REQUEST['id_kategori'];
include('koneksi.php');
include('header.php');
$kategori_mustahik = mysqli_query($koneksi, "SELECT * FROM kategori_mustahik where id_kategori = $id");
$mustahik = mysqli_fetch_array($kategori_mustahik);

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Edit Data Mustahik</h1>
    <form method="POST" action="emustahik.php">
        <input type="hidden" name="id_kategori" value="<?= $mustahik['id_kategori']; ?>">
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="nama_kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="Amil" <?php if ($mustahik['nama_kategori'] == 'Amil') echo 'selected'; ?>>Amil</option>
                    <option value="Fakir" <?php if ($mustahik['nama_kategori'] == 'Fakir') echo 'selected'; ?>>Fakir</option>
                    <option value="Miskin" <?php if ($mustahik['nama_kategori'] == 'Miskin') echo 'selected'; ?>>Miskin</option>
                    <option value="Fisabillilah" <?php if ($mustahik['nama_kategori'] == 'Fisabillilah') echo 'selected'; ?>>Fisabilillah</option>
                    <option value="Mampu" <?php if ($mustahik['nama_kategori'] == 'Mampu') echo 'selected'; ?>>Mampu</option>
                    <option value="Lainnya" <?php if ($mustahik['nama_kategori'] == 'Lainnya') echo 'selected'; ?>>Lainnya</option>

                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $mustahik['jumlah_hak']; ?>" id="inputText3" name="jumlah_hak">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>
