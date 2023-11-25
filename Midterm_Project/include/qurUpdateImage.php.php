<?php
$img = $_FILES["imgUpdate"]["name"];
$rand = rand();
$imgU = $rand . $img;
$path = "Image/" . $imgU;
$path1 = "../Image/" . $imgU;
move_uploaded_file($_FILES['imgUpdate']['tmp_name'], $path1);

include('connect.php');
$sfId = $_POST["txtId"];
$queryUpdate = 'Update tblData SET 
            ImgUrl = "' . $path . '"WHERE id="' . $sfId . '"';

if (mysqli_query($conn, $queryUpdate)) {
    $conn->close();
    header("location:../EditPro.php");
} else
    echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbCon);

echo '<br/><br> Thank You!!!';
$dbCon->close();
