<?php
include "bot.php";
include "konek.php";
?>
<link rel="stylesheet" href="style.css">
<body>

<form action="proses_login.php" method='post'>
<h1>Login</h1>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="username" name="username">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
