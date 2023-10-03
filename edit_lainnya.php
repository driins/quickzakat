<?php
$id = $_REQUEST['id_mustahiklainnya'];
include('koneksi.php');
include('header.php');
$mustahik_lainnya = mysqli_query($koneksi, "SELECT * FROM mustahik_lainnya where id_mustahiklainnya = $id");
$mustahik_lainnya = mysqli_fetch_array($mustahik_lainnya);

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Data Mustahik</h1>
    <form method="POST" action="elainnya.php">
        <input type="hidden" name="id_mustahiklainnya" value="<?= $mustahik_lainnya['id_mustahiklainnya']; ?>">
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $mustahik_lainnya['nama']; ?>" id="inputText3" name="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="Amilin" <?php if ($mustahik_lainnya['kategori'] == 'Amilin') echo 'selected'; ?>>Amilin</option>
                    <option value="Fisabillilah" <?php if ($mustahik_lainnya['kategori'] == 'Fisabillilah') echo 'selected'; ?>>Fisabilillah</option>
                    <option value="Mualaf" <?php if ($mustahik_lainnya['kategori'] == 'Mualaf') echo 'selected'; ?>>Mualaf</option>
                    <option value="Ibnu Sabil" <?php if ($mustahik_lainnya['kategori'] == 'Ibnu Sabil') echo 'selected'; ?>>Ibnu Sabil</option>

                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $mustahik_lainnya['hak']; ?>" id="inputText3" name="hak">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

</div>
<!-- /.container-fluid -->

<?php include('footer.php'); ?>
