<?php include('header.php');
include ('koneksi.php'); ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pengumpulan Zakat Fitrah</h1>
                    <p class="mb-4">Kelola Zakat Fitrah / Data Pengumpulan<a target="_blank" href=""></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama KK</th>
                                            <th>Jumlah Tanggungan</th>
                                            <th>Jenis Bayar</th>
                                            <th>Jumlah Tanggungan Yang Dibayar</th>
                                            <th>Beras</th>
                                            <th>Uang</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM bayarzakat");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $no++; ?></th>
                                            <th><?php echo $d['nama_KK']; ?></th>
                                            <th><?php echo $d['jumlah_tanggungan']; ?></th>
                                            <th><?php echo $d['jenis_bayar']; ?></th>
                                            <th><?php echo $d['jumlah_tanggunganyangdibayar']; ?></th>
                                            <th><?php echo $d['bayar_beras']; ?> Kg</th>
                                            <th>Rp<?= number_format($d['bayar_uang'], 0, ',', '.'); ?></th>
                                            <th>
                                                 <a href="edit_pengumpulan.php?id_zakat=<?php echo $d['id_zakat']; ?>">Edit</a> |
                                                  <a href="hapus_pengumpulan.php?id_zakat=<?php echo $d['id_zakat']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                              </th>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>