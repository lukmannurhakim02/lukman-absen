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