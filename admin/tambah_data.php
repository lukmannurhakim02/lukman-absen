<?php
include "../bot.php";
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamn = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $add = "INSERT INTO siswa (nis, nama, jenis_kelamin, tanggal_lahir) VALUE('$nis','$nama','$jenis_kelamn','$tanggal_lahir')";

    if ($conn->query($add) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
        <input type="text" name="nis" placeholder="nis"><br>
    </div>
    <div class="tb-dt">
        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
        <input type="text" name="nama" placeholder="nama"><br>
    </div>
    <div class="tb-dt">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" placeholder="jenis_kelamin"><br>
    </div>
    <div class="tb-dt">
        <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label>
        <input type="text" name="tanggal_lahir" placeholder="tanggal_lahir"><br>
    </div>
    <input type="submit" name="add" value="tambah" class="btn btn-succes">
</form>

<?php
include "../footer.php";
?>