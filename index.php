<?php
include "bot.php";
?>
<style>
    .judul {
        padding-top: 100px;
    }
    .btn {
        background: #3F979B;
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
    <nav class="navbar navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/logosmk.webp" width="30px" heigh="30px">
        <b>AttendNow</b>
        </a>
    </div>
    </nav>
    <section class="judul" class="py-4 bg-white">
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="mb-1 mt-5 mobile">Aplikasi Absensi RPL</h2>
                            <h5 class="mt-5">Absensi adalah sebuah kegiatan pengambilan data guna mengetahui jumlah kehadiran pada suatu acara. Setiap kegiatan yang membutuhkan informasi mengenai peserta tentu akan melakukan absensi. Hal ini juga terjadi pada proses belajar.</h5><br>
                            <a href="login.php"><button type="submit" class="btn fs-4">Login</button></a>
                        </div>
                        <div class="col-3 mt-5"><img src="img/input.png" width="179%"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="unggulan py-4">
        <div class="container py-5">
            <div class="card"  style="background: #3F979B;">
                <h3 class="text-center py-3">Beberapa fungsi aplikasi Absen</h3>
                <div class="card-body">
                    <div class="row text-black offset-1 mb-4">
                        <div class="col-3 py-3" style="background: #85CDFD; border-radius:5px;">
                            <h2>Input Data</h2>
                            <h5>Aplikasi ini bisa menginput data berdasarkan murid kelas masing-masing untuk menambahkan jumlah murid kelas</h5>
                        </div>
                        <div class="col-3 mx-5" style="background: #85CDFD; border-radius:5px;">
                            <h2>Input Data</h2>
                            <h5>Aplikasi ini bisa menginput data berdasarkan murid kelas masing-masing untuk menambahkan jumlah murid kelas</h5>
                        </div>
                        <div class="col-3" style="background: #85CDFD; border-radius:5px;">
                            <h2>Input Data</h2>
                            <h5>Aplikasi ini bisa menginput data berdasarkan murid kelas masing-masing untuk menambahkan jumlah murid kelas</h5>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
</body>
<?php
include "footer.php";
?>