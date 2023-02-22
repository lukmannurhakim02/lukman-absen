<?php
    include "../koneksi.php";
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
      <span class="input-group-text" ><button type="submit" class="btn"><i class='bx bx-search'></i></button></span>
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
            <td>Nis</td>
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
              <td><?php echo $a['nis']?></td>
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
              <td><?php echo $a['nis']?></td>
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