<?php
session_start();
if (isset($_POST['submit'])) {
  // Ambil data dari form login
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validasi username dan password
  if ($username === 'admin' && password_verify($password, '21232f297a57a5a743894a0e4a801fc3')) {
    // Jika login sebagai admin
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = 'admin';
    header('Location: admin.php');
    exit;
  } elseif ($username === 'petugas' && password_verify($password, '$2y$10$7Fp75wGFWV7zN8FE9G6i1u/Pm3qD7ITF4fPzszg51U6hbvL2mS5R2')) {
    // Jika login sebagai petugas
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = 'petugas';
    header('Location: petugas.php');
    exit;
  } else {
    // Jika username atau password salah
    $error = 'Username atau password salah';
  }
}
?>
        <div class="pb-3 px-4">
            <label for="exampleInputPassword1" class="form-label">Kelas</label>
            <select class="form-select" name="id_kelas" aria-label="Default select example">

            <?php
            include "koneksi.php";
            $sql = "SELECT * FROM kelas";

            $hasil = mysqli_query($conn,$sql);
            print_r($hasil);
            while ($data = mysqli_fetch_array($hasil)) {
                
                ?>
                <option value="<?php echo $data['nm_kelas'];?>">
                <?php echo $data['nm_kelas'];?>
            </option>
            <?php
            }
            ?>
                
            </select> 
        </div>
       
        