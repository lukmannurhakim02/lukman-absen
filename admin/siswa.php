<?php
include "../bot.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../patch/style.css">
<section id="data-siswa">
<div class="table-data"> 
<h2>Data siswa</h2>
<div class="row py-3">
    <div class="col-2">
    <a href="index.php?page=tambah_data"><button type="button" class="btn btn-success mb-2">+Tambah</button> </a>
    </div>
    <div class="col-6">
    <form action="" class="acion">
    <div class="input-group">
        <input type="text" name="page" value="siswa" hidden>
        <input type="text" name="search" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" name="cari" id="button-addon2"><i class='bx bx-search-alt fs-5'></i></button>
    </div>
    </form> 
    </div>
</div>
<table class="table table-light table-striped py-5">
    <tr>
        <td>No</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Action</td>
    </tr>
    <?php
    if(isset($_GET['search'])){
        $nama = $_GET['search'];

        $query = "SELECT * FROM siswa where nama like '%$nama%'";
        $result= $conn->query($query);
    }else {
        $query = "SELECT * FROM siswa";
        $result= $conn->query($query);
    }
    $no= 1;
    while ($data = $result->fetch_assoc()){
        
    ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data["nis"] ?></td>
            <td><?php echo $data["nama"] ?></td>
            <td><?php echo $data["jenis_kelamin"] ?></td>
            <td><?php echo $data["tanggal_lahir"] ?></td>
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
                    <a href="delete.php?nis=<?php echo $data['nis']?>"><button type="submit" class="btn btn-danger ">Delete</button></a>
                    </form>
                </div>
                </div>
            </div>
            </div>

            <a href="index.php?page=edit&nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-warning"><i class='bx bxs-edit-alt'></i></button></a></td>

        </tr>
    <?php
    }
    ?>
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
</section>

<?php
include "../footer.php";
?>