<section>
    <div class="text-start">
        <h3>Dashboard</h3>
    </div>
   <div class="row">
   <div class="info-data col-6">
        <div class="card bg-info">
            <div class="head">
                <div>
                    <?php
                        $id = $_SESSION['id'];
                        $sql = "SELECT tb_user.id, tb_user.id_kelas, kelas.wali_kelas
                        FROM tb_user
                        INNER JOIN kelas ON tb_user.id_kelas=kelas.id_kelas WHERE tb_user.id='$id'";
                        $result = $conn->query($sql);
                        
                        $count=$result->fetch_assoc();
                    ?>
                    <h2><?php echo $count['wali_kelas'];?></h2><br>
                    <span class="fs-6">Wali Kelas</span></h2>
                    <i class='bx bxs-star icon'></i>
                </div>
            </div>
        </div>
    </div>
    <div class="info-data col-6">
        <div class="card bg-primary">
            <div class="head">
                <div>
                    <?php
                    $sql = "SELECT COUNT(*) as jumlah FROM  siswa";
                    $result = $conn->query($sql);
                
                    $count=$result->fetch_assoc();
                    ?><h2><?php echo $count['jumlah'];?></h2><br>
                    <span class="fs-6">Murid</span>
                    <i class='bx bxs-graduation icon'></i>
                </div>
            </div>
        </div>
    </div>
   </div>
    <div class="keterangan-card">
        <div class="card bg-success">
            <div class="kehadiran">
                <div>
                <?php
                    $sql = "SELECT COUNT(*) as keterangan FROM  absen WHERE keterangan='hadir'";
                    $result = $conn->query($sql);
                
                    $count=$result->fetch_assoc();
                    ?><h2><?php echo $count['keterangan'];?></h2><br>
                    <span class="fs-6">Hadir</span></h2>
                    <i class='bx bxs-user-check icon '></i>
                </div>
            </div>
        </div>
        <div class="card bg-light">
            <div class="kehadiran">
                <div>
                <?php
                    $sql = "SELECT COUNT(*) as keterangan FROM  absen WHERE keterangan='sakit'";
                    $result = $conn->query($sql);
                
                    $count=$result->fetch_assoc();
                    ?><h2><?php echo $count['keterangan'];?></h2><br>
                    <span class="fs-6">Sakit</span></h2>
                    <i class='bx bxs-thermometer icon '></i>
                </div>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="kehadiran">
                <div>
                <?php
                    $sql = "SELECT COUNT(*) as keterangan FROM  absen WHERE keterangan='izin'";
                    $result = $conn->query($sql);
                
                    $count=$result->fetch_assoc();
                    ?><h2><?php echo $count['keterangan'];?></h2><br>
                    <span class="fs-6">Izin</span></h2>
                    <i class='bx bxs-hand icon ' ></i>
                </div>
            </div>
        </div>
        <div class="card bg-danger">
            <div class="kehadiran">
                <div>
                <?php
                    $sql = "SELECT COUNT(*) as keterangan FROM  absen WHERE keterangan='Tanpa_keterangan'";
                    $result = $conn->query($sql);
                
                    $count=$result->fetch_assoc();
                    ?><h2><?php echo $count['keterangan'];?></h2><br>
                    <span class="fs-6">Tanpa Keterangan</span></h2>
                    <i class='bx bxs-user-x icon '></i>
                </div>
            </div>
        </div>
    </div>
</section>