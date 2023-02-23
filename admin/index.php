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
            <li><a href="?page=laporan"><i class='bx bxs-edit-alt fs-3'></i><span>Laporan</span></a></li>
            <li class="divider" data-text="log-out">Log-out</li>
            <li><a href="../logout.php"><i class='bx bx-log-out fs-3 py-3'></i><span>LogOut</span></a></li>
        </ul><br>
    </section>
<!-- ---NAVBAR--- -->
    <section id="content">
        <nav>
            <div class="container-fluid">
                <i class='bx bx-menu toggle-sidebar'></i>
                <a class="navbar-brand text-white" href="#">
                    Aplikasi Absensi Siswa
                </a>
            </div>
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
        case 'laporan':
            include "laporan.php";
            break;    
        case 'ngabsen':
            include "ngabsen.php";
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