<?php
include "bot.php";
?>
<style>
    .judul {
        padding-top: 100px;
    }
    .btn {
        background: #129fc2;
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
            <div class="card px-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="mb-1 mt-5 mobile">Aplikasi Absensi RPL</h2>
                            <h5 class="mt-5 fs-4">Absensi adalah sebuah kegiatan pengambilan data guna mengetahui jumlah kehadiran pada suatu acara. Setiap kegiatan yang membutuhkan informasi mengenai peserta tentu akan melakukan absensi. Hal ini juga terjadi pada proses belajar.</h5><br>
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
            <div class="card">
                <h3 class="text-center py-3">Beberapa fungsi aplikasi Absen</h3>
                <div class="card-body">
                    <div class="row text-black offset-1 mb-4">
                        <div class="col-3 py-3" style="background: #129fc2; border-radius:5px;">
                            <h5>APK absen juga dapat meningkatkan transparansi dan akuntabilitas. Dengan mencatat kehadiran secara digital, semua data absensi dapat tersimpan dengan rapi dan mudah diakses. Hal ini membantu pengguna untuk memantau kehadiran karyawan atau siswa secara real-time, dan dapat memudahkan pengambilan keputusan yang tepat terkait manajemen kehadiran.</h5>
                        </div>
                        <div class="col-3 mx-5 py-3" style="background: #129fc2; border-radius:5px;">
                            <h5>APK absen dapat mempercepat proses absensi, karena pengguna dapat mengaksesnya langsung melalui perangkat mobile mereka, tanpa perlu lagi mengisi absen manual atau memeriksa absen secara manual. Hal ini dapat menghemat waktu dan tenaga pengguna, serta membantu meningkatkan produktivitas.</h5>
                        </div>
                        <div class="col-3 py-3" style="background: #129fc2; border-radius:5px;">
                            <h5>APK absen juga dapat meningkatkan transparansi dan akuntabilitas. Dengan mencatat kehadiran secara digital, semua data absensi dapat tersimpan dengan rapi dan mudah diakses. Hal ini membantu pengguna untuk memantau kehadiran karyawan atau siswa secara real-time, dan dapat memudahkan pengambilan keputusan yang tepat terkait manajemen kehadiran.</h5>
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