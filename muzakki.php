<?php include('header.php');
include ('koneksi.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Muzakki</h1>
    <p class="mb-4">Master Data / Muzakki<a target="_blank" href=""></a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="tambah_muzakki.php" class="btn btn-primary"> Tambah Data</a>
        </div>
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah Tanggungan</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan ID
                $query = "SELECT * FROM muzakki ORDER BY id_muzakki ASC";
                $result = mysqli_query($koneksi, $query);
                //mengecek apakah ada error ketika menjalankan query
                if(!$result){
                    die ("Query Error: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
                }

                //buat perulangan untuk element tabel dari data mahasiswa
                $no = 1; //variabel untuk membuat nomor urut
                // hasil query akan disimpan dalam variabel $data dalam bentuk array
                // kemudian dicetak dengan perulangan while
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <tr>
                    <td><?php echo $no; ?></span></td>
                    <td><?php echo $row['nama_muzakki']; ?></td>
                    <td><?php echo $row['jumlah_tanggungan']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td>
                        <a href="edit_muzakki.php?id_muzakki=<?php echo $row['id_muzakki']; ?>">Edit</a> |
                        <a href="hapus_muzakki.php?id_muzakki=<?php echo $row['id_muzakki']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a> |
                        <a href="bayarzakat.php?id_muzakki=<?php echo $row['id_muzakki']; ?>">Bayar</a> |
                        <a href="tambah_distribusiwarga.php?id_muzakki=<?php echo $row['id_muzakki']; ?>">Distribusi</a> 
                    </td>
                </tr>                   
                <?php
                    $no++; //untuk nomor urut terus bertambah 1
                }
                ?>
            </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php');?>