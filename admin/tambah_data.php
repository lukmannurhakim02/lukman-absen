<?php
ob_start();
include "../bot.php";
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamn = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $add = "INSERT INTO siswa VALUE('','$nis','$nama', '$jenis_kelamn','$tanggal_lahir')";
    $insert = mysqli_query($conn, $add);
    
}
?>
<link rel="stylesheet" href="../patch/style.css">

<body style="background-color:black;">
<div class="tambah_data">
    <form class="mx-5 py-3" method="post" action="">
        <div class="mb-2">
            <label for="nis" class="form-label">Nis Siswa</label>
            <input type="text" class="form-control" id="nis" name="nis">
        </div>
        <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-2">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jk" name="jenis_kelamin">
        </div>
        <div class="mb-2">
            <label for="tg" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tg" name="tanggal_lahir">
        </div>
        <input type="submit" name="add" value="tambah" class="btn btn-success ">
    </form>
    <!-- <form action="" method="post">
        <div class="tb-dt  col-6">
            <label for="exampleInputEmail1" class="form-label">Nis Siswa</label><br>
            <input type="text" name="nis"><br>
        </div>
        <div class="tb-dt">
            <label for="exampleInputEmail1" class="form-label">Nama Siswa</label><br>
            <input type="text" name="nama"><br>
        </div>
        <div class="tb-dt">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label><br>
            <input type="text" name="jenis_kelamin"><br>
        </div>
        <div class="tb-dt">
            <label for="exampleInputEmail1" class="form-label">Tanggal lahir</label><br>
            <input type="date" name="tanggal_lahir"><br>
        </div>
        <input type="submit" name="add" value="tambah" class="btn btn-success ">
    </form> -->
</div>
</body>
<?php
include "../footer.php";
?>