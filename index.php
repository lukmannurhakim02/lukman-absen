<?php
include "bot.php";
?>
<link rel="stylesheet" href="patch/style.css">
<body>
    <form class="login" action="proses_login.php" method='post'>
    <h1 class="py-2">LOGIN</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputNama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="text-end px-4">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>