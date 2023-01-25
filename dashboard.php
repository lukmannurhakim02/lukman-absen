<?php
include "bot.php";
include "konek.php";
?>
<link rel="stylesheet" href="style.css">
<section id="sidebar">
        <a href="#" class="brand mt-2">
            <img class="img-fluid rounded-circle " src="logo.jpg" alt="" width="50px" height="50px">
            <p>SMKN 1 RONGGA</p>
        </a>
        <ul class="side-menu">
            <li>
                <a href="dashboard.php" class="active"><i class='bx bxs-dashboard fs-3'></i><span class="fs-6">Dashboard</span></a>
            </li>
            <li>
                <a href="absen.php"><i class='bx bxs-book fs-3'></i><span class="fs-6">Absensi</span></a>
            </li>
            <li>
                <a href="laporan.php"><i class='bx bxs-edit-alt fs-3'></i><span class="fs-6">Laporan</span></a>
            </li>
        </ul>
    </section>
<section id="data-siswa">
<div class="table-data"> 


<h2>Data siswa RPL III</h2>
<a href="absen.php"><button type="button" class="btn btn-success click ">+Tambah</button></a>

<table class="table table-light table-striped   ">
    <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Action</td>
    </tr>
    <?php
    $query = "SELECT * FROM siswa_rpl3";
    $select = mysqli_query($koneksi, $query);
    while ($data = mysqli_fetch_array($select)){
    ?>
        <tr>
            <td><?php echo $data["NIS"] ?></td>
            <td><?php echo $data["Nama"] ?></td>
            <td><?php echo $data["Jenis Kelamin"] ?></td>
            <td><?php echo $data["Tanggal Lahir"] ?></td>
            <td><a href="delete.php?NIS=<?php echo $data['NIS']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            <td><a href="edit.php?NIS=<?php echo $data['NIS']?>"><button type="button" class="btn btn-warning">Edit</button></a></td>

        </tr>
    <?php
    }
    ?>
</table>
</div>
</section>