<?php
include "bot.php";
?>
<style>
    .btn {
        width: 200px;
        height: 50px;
        top: 100px;
    }
    .card {
        box-shadow:1px 1px 100px #129fc2;
    }
    .card-body {
        font-family: 'inter';
    }
</style>
<body>
    <nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/logosmk.webp" width="30px" heigh="30px">
        <b>Attendance</b>
        </a>
    </div>
    </nav>
    <section class="judul" class="py-4 bg-white">
        <div class="container py-5">
            <div class="card border-2 ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="mb-1 mt-5 mobile">Aplikasi Absensi RPL</h2>
                            <h5 class="mt-5">Absensi adalah sebuah kegiatan pengambilan data guna mengetahui jumlah kehadiran pada suatu acara. Setiap kegiatan yang membutuhkan informasi mengenai peserta tentu akan melakukan absensi. Hal ini juga terjadi pada proses belajar.</h5><br>
                            <a href="login.php"><button type="submit" class="btn btn-primary">Login</button></a>
                        </div>
                        <div class="col-3 mt-5"><img src="img/input.png" width="179%"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include "footer.php";
?>