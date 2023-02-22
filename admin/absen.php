<?php 
  if(isset($_POST['add'])){

    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_KARYAWAN
    $add = "INSERT INTO absen VALUES ( '$nama', '$tanggal', '$keterangan')";

    if($conn->query($add) === TRUE ){
      header("location:index.php?page=laporan");
    }
  }
?>

<link rel="stylesheet" href="../patch/style.css">
  <main> 
    <div class="container ">
      <div class="row">
        <div class="col-12">
        <div class="text-center">
          <h3>Tambah Data Absen</h3>
      </div>
    <form method="POST" action="" class="py-4">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Murid</label>
        <select class="form-select" name="name" type="text" aria-label="Default select example"> 
        <?php
          include "../koneksi.php";
          
          //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_SISWA
            $sql="SELECT * from siswa";

            $hasil=mysqli_query($conn,$sql);
            print_r($hasil);
            while ($data = mysqli_fetch_array($hasil)) {
          ?>
            <option value="<?php echo $data['nama'];?>">
            <?php echo $data['nama'];?>
            </option>
          <?php 
          }
          ?>
      </select>
    </div>
      <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Keterangan</label>
        <select class="form-select" name="information" type="text" aria-label="Default select example">
        <option selected value="hadir">Hadir</option>
        <option value="sakit">Sakit</option>
        <option value="izin">Izin</option>
        <option value="alpa">Alpa</option>
    </select>
  </div>      
      <button type="submit" name="add" class="btn btn-primary">Tambah</button>
  </form>
  </div>   
</div> 
</div>
</main>