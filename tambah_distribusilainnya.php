<?php include('header.php'); 
include ('koneksi.php'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                <h1 class="h3 mb-3 text-gray-800">Insert Data Distribusi Zakat </h1>
                <form method="POST" action="tabeldistribusilainnya.php">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputText3" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                <label for="inputSelect" class="col-sm-3 col-form-label">Kategori</label>
                <div class="col-sm-8">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"id="inputSelect" name="kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="Amilin">Amilin</option>
                    <option value="Fisabilillah">Fisabilillah</option>
                    <option value="Mualaf">Mualaf</option>
                    <option value="Ibnu Sabil">Ibnu Sabil</option>
                    </select>
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-3 col-form-label">Jumlah Hak</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputText3" name="hak">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

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