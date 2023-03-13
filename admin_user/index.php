<?php
include "../bot.php";
include "../koneksi.php";
session_start();
if ($_SESSION['level']= "") {
    header("location:../index.php");
}

if ($_SESSION['level'] == "Super_admin") {
    header("location:../superadmin/index.php");
}
echo $_SESSION['level'];
?>
<!-- ---SIDEBAR--- -->
<link rel="stylesheet" href="../patch/style.css">
<section id="sidebar">
        <a href="#" class="brand mt-2">
            <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="60px" height="60px">
            <p>Super admin</p>
        </a>
        <ul class="side-menu navbar-nav">
            <li class="nav-item"><a href="?page=home" class="active nav-link"><i class='bx bxs-dashboard nav-item fs-5'></i><span>Dashboard</span></a></li>
            <li class="divider" data-text="interface">Interface</li>
            <li><a href="?page=user"><i class='bx bxs-user fs-3'></i> <span>User</span></a></li>
            <li><a href="?page=kelas"><i class='bx bxs-school fs-3'></i> <span>Kelas</span></a></li>
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
        case 'user':
            include "user.php";
            break;
        case 'tambah-user':
            include "tambah-user.php";
            break;
        case 'tambah_kelas':
            include "tambah_kelas.php";
            break;
        case 'edit':
            include "edit_kelas.php";
            break;
        case 'kelas':
            include "kelas.php";
            break;
        case 'kelas_hapus':
            include "kelas_hapus.php";
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