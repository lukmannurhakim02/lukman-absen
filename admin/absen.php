<?php
  if(isset($_POST['add'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $keterangan = $_POST['keterangan'];
    //PERINTAH SQL UNTUK MENAMBAHKAN DATA KEDALAM TABEL TB_KARYAWAN
    $add = $conn->query("INSERT INTO absen VALUE ('', '$name', '$date', '$keterangan')");

    if($add){
      header("location:index.php?page=absen");
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
          
          //PERINTAH SQL UNTUK MENAMPILKAN SEMUA DATA DARI TABEL TB_KARYAWAN
            $sql="SELECT * from siswa";

            $hasil=mysqli_query($conn,$sql);
            print_r($hasil);
            while ($data = mysqli_fetch_array($hasil)) {
          ?>
            <option value="<?php echo $data['name'];?>">
            <?php echo $data['name'];?>
            </option>
          <?php 
          }
          ?>
      </select>
    </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
        <input type="date" class="form-control" placeholder="masukkan tanggal" name="date" required>
      </div>
      <div class="mb-3">
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