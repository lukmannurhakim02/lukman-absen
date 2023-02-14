<?php
include "../bot.php";
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];

    $add = "INSERT INTO absen (nis, nama, keterangan, tanggal) VALUE ('$nis','$nama','$keterangan','$tanggal')";

    if ($conn->query($add) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $add . "<br>" . $conn->error;
    }
}
?>
<link rel="stylesheet" href="../patch/style.css">
<section id="sidebar">
    <a href="#" class="brand mt-2">
        <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="50px" height="50px">
        <p>SMKN 1 RONGGA</p>
    </a>
    <ul class="side-menu">
        <li>
            <a href="../admin/index.php" class="active"><i class='bx bxs-dashboard fs-3'></i><span class="fs-6">Dashboard</span></a>
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
    </ul><br>
</section>
<form class="tambah" action="" method="post">
    <div class="tb-dt">
        <label for="exampleInputEmail1" class="form-label">Nis Siswa</label>
        <input type="text" name="nis"><br>
    </div>
    <div class="tb-dt">
        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
        <input type="text" name="nama"><br>
    </div>
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
    </div>
    <input type="submit" name="add" value="tambah" class="btn btn-succes">
</form>

<?php
include "../footer.php";
?>