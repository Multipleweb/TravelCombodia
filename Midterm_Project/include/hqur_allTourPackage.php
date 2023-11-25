<?php
include 'connect.php';
$hpsql = 'select * from tblData where CatId=2 order by DateIn desc';
$hprs = $conn->query($hpsql);
if ($hprs->num_rows > 0) {
    while ($row = $hprs->fetch_assoc()) {
?>
        <div class="container-place">
            <div class="qur-img">
                <img src="<?php echo $row["ImgUrl"] ?>" alt="">
            </div>
            <div class="block">
                <br>
                <div class="Proname">
                    <a href="<?php echo $row["DesUrl"]; ?>"><h3><?php echo $row["ProName"]; ?></h3></a>
                </div>
                <div class="des">
                    <p><?php echo $row["Description"]; ?></p>
                </div>
                <div class="rate" style="display: flex; justify-content: space-between; width: 470px; margin-top: 5px;">
                    <div style="display: flex; flex-direction: column; gap: 5px;">
                        <p style="color: blue;">Rate:</p>
                        <p style="color: orange;">4.2/5</p>
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; gap: 5px;">
                        <div>
                            <p style="color: green;">Ativity:</p>
                        </div>

                        <div style="display: flex; gap: 10px;">
                            <img src="image/camera.png" alt="" width="20px">
                            <img src="image/car.png" alt="" width="20px">
                            <img src="image/cooking.png" alt="" width="20px">
                            <img src="image/motel.png" alt="" width="20px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
<?php
    }
} else {
    echo '0 Result';
    $conn->close();
}


?>