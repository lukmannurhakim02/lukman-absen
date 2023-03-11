<?php
include "../bot.php";
include "../koneksi.php";
?>
<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- End of Topbar -->
    <!-- Begin Page Content -->
    <div class="container-fluid mb-5"> 
        <div class="card-body">
            <div class="table-responsive">
            <button type="button" class="btn btn-success"><a href="?page=tambah-user" class="text-white">Tambah Data</a></button>
                <table class="table table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Username</td>
                            <td>Id Kelas</td>
                            <td>Level</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM tb_user";
                        $result= $conn->query($query);
                        $no= 1;
                        while ($data = $result->fetch_assoc()){       
                        ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data["username"] ?></td>
                            <td><?php echo $data["id_kelas"] ?></td>
                            <td><?php echo $data["level"] ?></td>
                            <td>
                            <!-- Tombol untuk memicu modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class='bx bxs-trash'></i>
                            </button>

                            <!-- Modal Konfirmasi Delete -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="delete.php" method="POST">
                                        <input type="hidden" name="id" value="ID_DATA_YANG_INGIN_DIHAPUS">
                                        <a href="delete.php?id=<?php echo $data['id']?>"><button type="submit" class="btn btn-danger ">Delete</button></a>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <?php 
                        if(isset($_GET['admin'])){
                            $page = $_GET['admin'];
                    
                            switch ($page) {
                                case 'tambah_data':
                                    include "tambah_data.php";
                                    break;
                                case 'delete':
                                    include "delete.php";
                                    break;
                                case 'update':
                                    include "edit.php";
                                    break;
                            }
                        }
                    ?>
                </table>
            </div>    
        </div>    
    </div>    
    <!-- Bootstrap core JavaScript-->
    <script src="../patch/vendor/jquery/jquery.min.js"></script>
    <script src="../patch/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../patch/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../patch/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../patch/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../patch/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../patch/js/demo/datatables-demo.js"></script>
</table>
</div>
</section>

<?php
include "../footer.php";
?>