<?php
if (isset($_POST['cari'])) {
    $cari=$_POST['cari'];
    $tampil=$konek -> query("select * from siswa where nama like '%".$cari."%'");

}else{

$tampil = $konek -> query ("select * from siswa ");
}
while ($a=$tampil -> fetch_array()){


@$no++;

echo "<tr>
    <td><center>$no</center></td>
    <td>$a[nis]</td>
    <td>$a[nama]</td>
    <td><center>$a[tgl_lahir]</center></td>
    <td><center>$a[jk]</center></td>
    <td><center>$a[alamat]</center></td>
    <td><center>$a[kelas]</center></td>
    <td><center>$a[tglinput]</center></td>
    ";
}
  ?>