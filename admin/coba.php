<?php
    include "../koneksi.php";
    include "../bot.php";
?>
<!-- SECTION LIST DATA KARYAWAN -->
  <h3 class="text-uppercase">Recap Absensi Siswa</h3>
  <main >
    <div class="row">
    <div class="col-12">
      <form action="index.php?page=laporan" target="_parent" method="get">
      <div class="input-group ">
      <input type="text" name="page" value="recap" hidden>
      <input type="date" class="form-control" placeholder="Search" aria-label="Recipient's username" name="awal">
      <input type="date" class="form-control" placeholder="Search" aria-label="Recipient's username" name="akhir">
      <span class="input-group-text"><button type="submit" class="btn"><i class='bx bx-search'></i></button></span>
      <button class="btn btn-primary mx-2" onclick="printDiv('print')" type="submit"><i class='bx bx-printer'></i></button>
    </div>
    </form>
  </div>
</main>
<br>
<fieldset id="print">
    <main class="shadow bg-light">
      <table class=" list table ">

          <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal</td>
            <td>Keterangan</td>
          </tr>

           

          <?php
          @$search = $_GET['awal'];
          if($search==""){
            $jumlah_per = 1;
            $jumlah_data = count(select("SELECT * FROM absen"));
            $jumlah_hal = ceil($jumlah_data / $jumlah_per);
            $halaman_aktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
            $awal_data = ($jumlah_hal * $halaman_aktif) - $jumlah_per;

            $tampil = select("SELECT * FROM absen LIMIT 1");
            $result = $conn->array($tampil);
            $no=1;
            while ($a=$result->fetch_assoc()){
              
              ?>
              
              <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $a['nama']?></td>
              <td><?php echo $a['tanggal']?></td>              
              <td><?php echo $a['keterangan']?></td>

              <?php
            }
            
          }else
          {
            $tampil = $connect->query("SELECT * FROM absen WHERE date between'$_GET[awal]' and '$_GET[akhir]'");
            while ($a=$tampil->fetch_array()){
              @$no++;
              ?>
              <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $a['nama']?></td>
              <td><?php echo $a['tanggal']?></td>              
              <td><?php echo $a['keterangan']?></td>

             <?php 
            }
          }
          ?>

              </tr>
        </table>
        </fieldset>
          <div class="mt-1 justify-content-end d-flex">
          <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
          </div>
      </main>  
      </body>     
<script type="text/javascript">
  function printDiv (el) {
    var a= document.body.innerHTML;
    var b= document.getElementById(el).innerHTML;

    document.body.innerHTML=b;
    window.print();
    dokument.body.innerHTML=a;
  }
</script>