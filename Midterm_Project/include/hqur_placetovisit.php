<?php
    include 'connect.php';
    $psql = 'select * from tblData where CatId=1 order by DateIn desc limit 3';
    $prs = $conn->query($psql);
    if ($prs->num_rows > 0) {
        echo '<table width="900px" cellpadding="5px" cellspacing="5px">';
        echo '<tr>';
        while ($row = $prs->fetch_assoc()){
            echo '<td width="300px" style="vertical-align:middle; text-align:center;">';
            echo '<h3>'. $row["ProName"] . '</h3>' . '<br>';
            echo '<img src="'. $row["ImgUrl"] .'" width="280px" height="200px"/> </td>';
        }
        echo '</tr>';
        echo '</table>';
    } else {
        echo "Error: " . $prs . "<br>" . mysqli_error($conn);
    }
    
?>