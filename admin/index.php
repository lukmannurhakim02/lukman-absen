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
            <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="50px" height="50px">
            <p>XII RPL</p>
        </a>
        <ul class="side-menu">
            <li><a href="../admin/index.php" class="active"><i class='bx bxs-dashboard fs-3'></i><span class="fs-6">Dashboard</span></a></li>
            <li class="divider">Interface</li>
            <li><a href="siswa.php"><i class='bx bxs-graduation fs-3'></i><span class="fs-6">Siswa</span></a></li>
            <li><a href="absen.php"><i class='bx bxs-book fs-3'></i><span class="fs-6">Absensi</span></a></li>
            <li><a href="laporan.php"><i class='bx bxs-edit-alt fs-3'></i><span class="fs-6">Laporan</span></a></li>
            <li class="divider">Log-out</li>
            <li><a href="../logout.php"><i class='bx bx-log-out fs-3 py-3'></i><span class="fs-6">Log-out</span></a></li>
        </ul><br>
    </section>
<!-- ---NAVBAR--- -->
    <section id="content">
        <nav >
            <div class="container-fluid">
                <i class='bx bx-menu toggle-sidebar'></i>
                <a class="navbar-brand text-white" href="#">
                    Aplikasi Absensi Siswa SMKN 1 RONGGA
                </a>
            </div>
        </nav>
    </section>
    <script src="../patch/style.js"></script>
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
        case 'laporan':
            include "laporan.php";
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