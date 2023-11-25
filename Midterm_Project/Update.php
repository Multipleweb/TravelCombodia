<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    <?php
    include './include/connect.php';
    $id = $_GET["fid"];
    $Usql = 'select * from tblData where ID=' . $id;
    $Uresult = $conn->query($Usql);
    $Urow = $Uresult->fetch_assoc();
    ?>
    <form name="frmAddNew" action="./include/Qur_updated.php" method="post" enctype="multipart/form-data">
        <table style="width:920px; font-size:20px">
            <tr>
                <td colspan="2" style="padding: 5px">
                    <h2> Update New Information </h2>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px" hidden>ID:</td>
                <td style="padding: 5px"><input type="text" name="txtid" style="width:650px;  font-size:20pt; border:2px solid green;" hidden value=<?php echo $Urow["ID"]; ?>></td>
            </tr>
            <tr>
                <td style="padding: 5px">Product Name :</td>
                <td style="padding: 5px"><input type="text" name="txtname" style="width:650px;  font-size:20pt; border:2px solid green;" value='<?php echo $Urow["ProName"]; ?>'></td>
            </tr>
            <tr>
                <td style="padding: 5px">Product Type :</td>
                <td style="padding: 5px">
                    <?php
                    include('include/Tourtype.php');
                    if ($rtt->num_rows > 0) {
                        echo '<select name="CatType" style="width: 650px; height:40px; border:2px solid green;">';
                        while ($roft = $rtt->fetch_assoc())
                            echo ('"<option value="' . $roft["CatId"] . '">' . $roft["Category"] . '</option>"');
                        echo '</select>';
                    } else {
                        echo "0 results";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px">Description :</td>
                <td style="padding: 5px">
                    <textarea rows="8" name="des" style="width:650px;  font-size:20pt; border:2px solid green;">
                <?php echo $Urow["Description"]; ?>
                            </textarea>
                </td>
            </tr>
            <tr>
                <td style="padding: 5px">Description Link :</td>
                <td style="padding: 5px"><input type="text" name="deslink" style="width:650px;  font-size:20pt; border:2px solid green;" value=<?php echo $Urow["DesUrl"]; ?>></td>
            </tr>
            <tr>
                <td style="padding: 5px"></td>
                <td style="display: flex; justify-content: space-between;">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="Submit" name="cmdSubmint" value="Submit" style="width: 200px; height: 40px; background-color: #002652; color: white; border: none; outline: none; cursor: pointer; margin-left: -400px; font-size: 15px; margin-top: 30px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" name="cmdReset" value="Cancel" style="width: 200px; height: 40px; background-color: red; color: white; border: none; outline: none; cursor: pointer; font-size: 15px; margin-right: 80px; margin-top: 30px;">
                </td>
            </tr>
        </table>
    </form>
    <?php
    ?>
</body>

</html>
<?php
    if(isset($_POST["Cancel"])){
        header("Location:./EditPro.php");
    }
?>