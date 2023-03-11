<?php
include "bot.php";
?>
<link rel="stylesheet" href="patch/style.css">
<body>
    <form class="login" action="proses_login.php" method='post'>
        <img class="img" src="img/logosmk.webp" width="150px" heigh="150px">
        <h1 class="py-2">ABSENSI SISWA</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" required name="password" id="password">
        </div>
        <div class="text-end px-4">
            <button type="submit" class="btn btn-primary">LogIn</button>
        </div>
    </form>
</body>
<?php
include "footer.php";
?>