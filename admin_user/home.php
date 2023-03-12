<section>
    <h2>Dashboard</h2>
    <div>
        <div class="info-data col-15">
            <div class="card bg-primary">
                <div class="head">
                    <div>
                        <?php
                        $sql = "SELECT COUNT(*) as jumlah FROM  tb_user";
                        $result = $conn->query($sql);
                    
                        $count=$result->fetch_assoc();
                        ?><h2><?php echo $count['jumlah'];?></h2><br>
                        <span class="fs-6">User</span>
                        <i class='bx bxs-graduation icon'></i>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <div>
        <div class="info-data col-15">
            <div class="card bg-success">
                <div class="head">
                    <div>
                        <?php
                        $sql = "SELECT COUNT(*) as jumlah FROM  kelas";
                        $result = $conn->query($sql);
                    
                        $count=$result->fetch_assoc();
                        ?><h2><?php echo $count['jumlah'];?></h2><br>
                        <span class="fs-6">Kelas</span>
                        <i class='bx bxs-school icon'></i>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>