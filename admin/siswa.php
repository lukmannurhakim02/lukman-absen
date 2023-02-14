<?php
include "../bot.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../patch/style.css">
<section id="data-siswa">
<div class="table-data"> 
<h2>Data siswa RPL III</h2>
<a href="tambah_data.php"><button type="button" class="btn btn-success">+Tambah</button></a>
<table class="table table-light table-striped  py-3">
    <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Action</td>
    </tr>
    <?php
    $query = "SELECT * FROM siswa";
    $select = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($select)){
    ?>
        <tr>
            <td><?php echo $data["nis"] ?></td>
            <td><?php echo $data["nama"] ?></td>
            <td><?php echo $data["jenis_kelamin"] ?></td>
            <td><?php echo $data["tanggal_lahir"] ?></td>
            <td><a href="delete.php?nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-danger">Delete</button></a>
            <a href="edit.php?nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-warning">Edit</button></a></td>

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