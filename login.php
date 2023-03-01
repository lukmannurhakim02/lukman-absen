<?php
include "bot.php";
?>
<link rel="stylesheet" href="patch/style.css">
<body>
    <form class="login" action="proses_login.php" method='post'>
        <h1 class="py-2">ABSENSI SISWA</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" required name="password" id="password">
        </div>
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
                <option value="<?php echo $data['id'];?>">
                <?php echo $data['nm_kelas'];?>
            </option>
            <?php
            }
            ?>
                
            </select> 
        </div>
        <div class="text-end px-4">
            <button type="submit" class="btn btn-primary">LogIn</button>
        </div>
    </form>
</body>
<?php
include "footer.php";
?>