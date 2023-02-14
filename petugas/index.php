<?php
include "../bot.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../patch/style.css">
<section id="sidebar">
        <a href="#" class="brand mt-2">
            <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="50px" height="50px">
            <p>SMKN 1 RONGGA</p>
        </a>
        <ul class="side-menu">
            <li>
                <a href="index.php" class="active"><i class='bx bxs-dashboard fs-3'></i><span class="fs-6">Absensi</span></a>
            </li>
            <li>
                <a href="absen.php"><i class='bx bxs-book fs-3'></i><span class="fs-6">Absensi</span></a>
            </li>
            <li>
                <a href="laporan.php"><i class='bx bxs-edit-alt fs-3'></i><span class="fs-6">Laporan</span></a>
            </li>
            <li>
                <a href="../logout.php"><i class='bx bx-log-out fs-3 py-5'></i><span class="fs-6">Log-out</span></a>
            </li>
        </ul>
    </section>
<section id="data-siswa">
<div class="table-data"> 


<h2>Data siswa RPL III</h2>
<a href="ngabsen.php"><button type="button" class="btn btn-success">+Tambah</button></a>

<table class="table table-light table-striped   ">
    <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Keterangan</td>
    </tr>
    <?php
    $query = "SELECT * FROM absen";
    $select = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($select)){
    ?>
        <tr>
            <td><?php echo $data["nis"] ?></td>
            <td><?php echo $data["nama"] ?></td>
            <td><?php echo $data["keterangan"] ?></td>
            <td><a href="hapus_absen.php?nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
</section>