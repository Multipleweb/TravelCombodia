<?php

    include 'connect.php';
    $adsql = 'select username,password from tblAdmin';
    $adresult = $conn->query($adsql);
    while ($row = $adresult->fetch_assoc()){
        $user = $_POST["txtname"];
        $pass = $_POST["txtpass"];
        if ($user==$row["username"] && $pass==$row["password"]){
            header("Location:../EditPro.php");
        }
        else {
            echo "Error: ";
        }
        $conn->close();
    }

?>