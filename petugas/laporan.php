<?php
    include "../koneksi.php";
?>
<!-- SECTION LIST DATA KARYAWAN -->
  <h3 class="text-uppercase">Recap Absensi Siswa</h3>
  <section >
    <div class="row">
    <div class="col-12">
      <form action="" method="get">
      <div class="input-group ">
      <input type="text" name="page" value="rekap" hidden>
      <input type="date" class="form-control" placeholder="Search" aria-label="Recipient's username" name="awal">
      <input type="date" class="form-control" placeholder="Search" aria-label="Recipient's username" name="akhir">
      <span class="input-group-text" ><button type="submit" class="btn btn-warning" data-toggle="search" data-placement="right" title="search"><i class='bx bx-search'></i></button></span>
    </div>
    </form>
  </div>
</section>
<br>
<fieldset id="print">
    <section class="shadow bg-light">
      <table class=" list table mb-5">

          <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal</td>
            <td>Keterangan</td>
          </tr>

           

          <?php
          @$search = $_GET['awal'];
          if($search==""){
            $tampil = $conn->query("SELECT * FROM absen");
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
            
          }else
          {
            $tampil = $conn->query("SELECT * FROM absen WHERE tanggal between'$_GET[awal]' and '$_GET[akhir]'");
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
        </section>  
      </body>     