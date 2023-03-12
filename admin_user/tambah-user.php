<?php
include "../bot.php";
include "../koneksi.php";
if (isset ($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    $level = $_POST['level'];

    $add = "INSERT INTO tb_user (username, password, id_kelas, level) VALUES ('$username','$password', '$id_kelas','$level')";
    $insert = mysqli_query($conn, $add);
    
    header('location:index.php?page=user');
}
?>
<link rel="stylesheet" href="../patch/style.css">

<body>
<div class="tambah_data">
    <form class="mx-5 py-3" method="post" action="">
        <div class="mb-2">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-2">
        <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-2">
            <label for="id_kelas" class="form-label">Id Kelas</label>
            <input type="text" class="form-control" id="id_kelas" name="id_kelas">
        </div>
        <div class="mb-2">
            <h6 class="form-label">Level</h6>
            <select class="form-select" name="level" aria-label="Default select example">
                <option value="Super_admin">Super_admin</option>
                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option>
            </select> 
        </div>
        <input type="submit" name="add" value="tambah" class="btn btn-success ">
        <a href="?page=user" class="btn btn-primary my-3"><i class='bx bx-arrow-back'></i></a>
    </form>
</div>
</body>
<?php
include "../footer.php";
?>