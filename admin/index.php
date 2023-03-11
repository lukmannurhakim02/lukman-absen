<?php
include "../bot.php";
include "../koneksi.php";
session_start();
if ($_SESSION['level']= "") {
    header("location:../index.php");
}

if ($_SESSION['level'] == "admin") {
    header("location:../admin/index.php");
}
echo $_SESSION['level'];
?>
<!-- ---SIDEBAR--- -->
<link rel="stylesheet" href="../patch/style.css">
<section id="sidebar">
        <a href="#" class="brand mt-2">
            <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="60px" height="60px">
            <p>Hello Admin</p>
        </a>
        <ul class="side-menu navbar-nav">
            <li class="nav-item"><a href="?page=home" class="active nav-link"><i class='bx bxs-dashboard nav-item fs-5'></i><span>Dashboard</span></a></li>
            <li class="divider" data-text="interface">Interface</li>
            <li><a href="?page=siswa"><i class='bx bxs-graduation fs-3'></i> <span>Siswa</span></a></li>
            <li><a href="?page=absen"><i class='bx bxs-book fs-3'></i> <span>Absensi</span></a></li>
            <li><a href="?page=rekap"><i class='bx bxs-edit-alt fs-3'></i><span>Laporan</span></a></li>
            <li class="divider" data-text="log-out">Log-out</li>
            <li><a href="../logout.php"><i class='bx bx-log-out fs-3 py-3'></i><span>LogOut</span></a></li>
        </ul><br>
    </section>
<!-- ---NAVBAR--- -->
    <section id="content" style="height:1000px">
        <nav>
            <div class="container-fluid">
                <i class='bx bx-menu toggle-sidebar'></i>
            </div>
            <div class="jam-digital-malasngoding">
                    <div class="kotak">
                        <p id="jam"> </p>
                    </div>
                    <div class="kotak">
                    <b>:</b>
                    </div>
                    <div class="kotak">
                        <p id="menit"></p>
                    </div>
                    <div class="kotak">
                    <b>:</b>
                    </div>
                    <div class="kotak">
                        <p id="detik"></p>
                    </div>
                </div>
                <center">
                <a href="https://www.malasngoding.com/membuat-jam-analog-dan-digital-dengan-javascript"></a>
                </center>
                <?php
                print date('l, d F Y');
                ?>
        </nav>
    <main>
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            include "home.php";
            break;
        case 'siswa':
            include "siswa.php";
            break;
        case 'absen':
            include "absen.php";
            break;
        case 'rekap':
            include "laporan.php";
            break;
        case 'tambah_data':
            include "tambah_data.php";
            break;
        case 'edit':
            include "edit.php";
            break;
        default:
            echo "<center><h3>Page</h3></center>";
            break;
    }
}else {
    include "home.php";
    include "../footer.php";
}
?>
</main>
</section>
<script src="../patch/style.js"></script>