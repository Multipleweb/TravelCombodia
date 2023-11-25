<?php

include 'connect.php';

$sql = "select * from tblData td inner join tblCategory tc on td.CatId=tc.CatId order by DateIn asc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
    <table border="1">
        <tr>
            <th>PostedID</th>
            <th>Posted Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Image</th>
            <th>Editing</th>
        </tr>
        <?php

        while ($row = $result->fetch_assoc()) {

        ?>
            <tr>
                <td><?php echo $row["ID"] ?></td>
                <td><?php echo $row['ProName']; ?></td>
                <td><?php echo $row['Category']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><img src="./<?php echo $row['ImgUrl']; ?>" alt=""></td>
                <td>
                    <div class="tbl-btn">
                        <button class="btn-1"><a href='Update.php?fid=<?php echo $row["ID"]; ?>'>Edit Info</a></button>
                        <button class="btn-2"><a href='UpdateImage.php?fid=<?php echo $row["ID"]; ?>'>Edit Image</a></button>
                        <button class="btn-3"><a href='delete.php?fid=<?php echo $row["ID"];?>'>Delete</a></button>
                    </div>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>
<?php

}

?>