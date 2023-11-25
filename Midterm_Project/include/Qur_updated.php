<?php

    include 'connect.php';
    $sfId = $_POST["txtid"];
    $Ssql = 'Update tblData SET 
    ProName = "'. $_POST["txtname"] .'",
    CatId = "'. $_POST["CatType"] .'",
    Description = "'. $_POST["des"] .'",
    DesUrl = "'. $_POST["deslink"] .'"
    where ID='. $sfId.'';

    if (mysqli_query($conn,$Ssql)) {
        $conn->close();
        header('location:../EditPro.php');
    } else {
        echo "Error:" . $Ssql . "<br>". mysqli_error($conn);
    }
    


?>