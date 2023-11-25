<?php
    include 'include/connect.php';
    $id = $_GET["fid"];
    $dsql = 'delete from tblData where ID='. $id;
    $dresult = $conn->query($dsql);
    if ($dresult > 0) {
        header('location:./EditPro.php');
    } else {
        echo "Error:" . $dresult . "<br>" . mysqli_error($conn);
    }
    
?>