<?php include('header.php');
include ('koneksi.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Distribusi Warga</h1>
    <p class="mb-4">Kelola Zakat Fitrah / Data Distribusi Warga<a target="_blank" href=""></a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah Hak</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM mustahik_warga");
            while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['hak']; ?> Kg</td>
                <td>
                            <a href="edit_warga.php?id_mustahikwarga=<?php echo $d['id_mustahikwarga']; ?>">Edit</a> |
                            <a href="hapus_warga.php?id_mustahikwarga=<?php echo $d['id_mustahikwarga']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>

            <!-- End Table with stripped rows -->

        </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php');?>