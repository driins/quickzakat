<?php include('header.php');
include('koneksi.php');
$total = mysqli_query($koneksi, "SELECT * FROM muzakki");
$total = mysqli_num_rows($total);
$beras = mysqli_query($koneksi, "SELECT SUM(bayar_beras) AS total_beras FROM bayarzakat");
$beras = mysqli_fetch_assoc($beras);
$uang = mysqli_query($koneksi, "SELECT SUM(bayar_uang) AS total_uang FROM bayarzakat");
$uang = mysqli_fetch_assoc($uang);
$jiwa = mysqli_query($koneksi, "SELECT SUM(jumlah_tanggungan) AS total_jiwa FROM muzakki");
$jiwa = mysqli_fetch_assoc($jiwa);
?>

<div class="row">
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card border-danger">
      <div class="card-body">
        <h4 class="card-title text-danger">Total Muzakki</h4>
        <h2 class="font-weight-normal mb-3"><?= $total; ?> Kepala Keluarga</h2>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card border-info">
      <div class="card-body">
        <h4 class="card-title text-info">Total Beras</h4>
        <h2 class="font-weight-normal mb-3"><?= $beras['total_beras']; ?> Kg</h2>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
    <div class="card border-success">
      <div class="card-body">
        <h4 class="card-title text-success">Total Uang</h4>
        <h2 class="font-weight-normal mb-3">Rp<?php $number = $uang['total_uang'];
                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                    echo $formattedNumber; ?></h2>
      </div>
    </div>
  </div>
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data QuickZakat</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Jumlah Tanggungan</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // jalankan query untuk menampilkan semua data diurutkan berdasarkan ID
              $query = "SELECT * FROM muzakki ORDER BY id_muzakki ASC";
              $result = mysqli_query($koneksi, $query);
              //mengecek apakah ada error ketika menjalankan query
              if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                  " - " . mysqli_error($koneksi));
              }

              //buat perulangan untuk element tabel dari data mahasiswa
              $no = 1; //variabel untuk membuat nomor urut
              // hasil query akan disimpan dalam variabel $data dalam bentuk array
              // kemudian dicetak dengan perulangan while
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_muzakki']; ?></td>
                  <td><?php echo $row['jumlah_tanggungan']; ?></td>
                  <td><?php echo $row['keterangan']; ?></td>
                </tr>
              <?php
                $no++; //untuk nomor urut terus bertambah 1
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
  </div>
</footer>

<!-- JS scripts -->

<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/todolist.js"></script>
</body>

</html>
