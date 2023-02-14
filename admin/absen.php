<?php
include "../bot.php";
include "../koneksi.php";
?>
<link rel="stylesheet" href="../patch/style.css">
<section id="sidebar">
        <a href="#" class="brand mt-2">
            <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="50px" height="50px">
            <p>XII RPL 3</p>
        </a>
        <ul class="side-menu">
        <li>
                <a href="../admin/index.php"><i class='bx bxs-dashboard fs-3'></i><span class="fs-6">Dashboard</span></a>
            </li>
            <li class="divider">Interface</li>
            <li>
                <a href="siswa.php" ><i class='bx bxs-graduation fs-3'></i><span class="fs-6">Siswa</span></a>
            </li>
            <li>
                <a href="absen.php" class="active"><i class='bx bxs-book fs-3'></i><span class="fs-6">Absensi</span></a>
            </li>
            <li>
                <a href="laporan.php"><i class='bx bxs-edit-alt fs-3'></i><span class="fs-6">Laporan</span></a>
            </li>
            <li class="divider">Log-out</li>
            <li>
                <a href="../logout.php"><i class='bx bx-log-out fs-3 py-3'></i><span class="fs-6">Log-out</span></a>
            </li>
        </ul>
    </section>
    <nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
        Aplikasi Absensi Siswa SMKN 1 RONGGA
    </a>
  </div>
</nav>
<section id="data-siswa">
<div class="table-data"> 


<h2>Data siswa RPL III</h2>
<a href="ngabsen.php"><button type="button" class="btn btn-success">+Tambah</button></a>

<table class="table table-light table-striped   ">
    <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Keterangan</td>
        <td>Tanggal</td>
    </tr>
    <?php
    $query = "SELECT * FROM absen";
    $select = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($select)){
    ?>
        <tr>
            <td><?php echo $data["nis"]; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["keterangan"]; ?>
            <form action="" method="post">
            <div class="tb-dt">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio1" value="hadir">
                    <label class="form-check-label" for="inlineRadio1">Hadir</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio2" value="sakit">
                    <label class="form-check-label" for="inlineRadio2">Sakit </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio2" value="izin">
                    <label class="form-check-label" for="inlineRadio2">Izin </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio2" value="tanpa keterangan">
                    <label class="form-check-label" for="inlineRadio2">Tanpa Keterangan </label>
                </div>
            </div>
            </form>
            </td>
            <td><?php echo $data["tanggal"]; ?></td>
            <td><a href="hapus_absen.php?nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
</section>
<?php
include "../footer.php";
?>