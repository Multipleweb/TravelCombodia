<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add New Information</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .con-table {
        width: 1000px;
    }
    .input{
        outline: none;
    }
    table tr td{
        display: flex;
        gap: 20px;
    }
    from{
        background-color: aqua;
    }
</style>

<body>
    <?php include('include/header_Edit.php'); ?>
    <div class="container">
        <div class="con-table">
            <table>
                <tr>
                    <td style="width:920px">
                <tr>
                    <td style="width:920px; vertical-align: top">

                        <form name="frmAddNew" action="AddNew-detail.php" method="post" enctype="multipart/form-data">
                            <table style="width:920px; font-size:20px; display: flex; justify-content: center; background-color: #EDEDED; border-radius: 10px; padding: 20px;">
                                <tr>
                                    <td colspan="2" style="padding: 5px; display: grid; place-content: center;">
                                        <h2 style="color: blue;"> Add New Information </h2>
                                    </td>
                                </tr>
                                <!-- <tr>
                        <td style="width:220px; padding: 5px">Product Id :</td>
                        <td style="width:700px; padding: 5px">
                            <input type="text" name="id" style="width:650px;  font-size:20pt">
                        </td>
                    </tr> -->
                                <tr>
                                    <td style="padding: 5px">Product Name :</td>
                                    <td style="padding: 5px"><input type="text" name="name" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 30px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px">Product Type :</td>
                                    <td style="padding: 5px">
                                        <?php
                                        include('include/Tourtype.php');
                                        if ($rtt->num_rows > 0) {
                                            echo '<select name="CatType" type="text" name="name" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 30px;">';
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
                                    <td style="padding: 5px"><textarea rows="8" name="des" type="text" name="name" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 100px;">
                            </textarea></td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px">Destination Link :</td>
                                    <td style="padding: 5px"><input type="text" name="deslink" type="text" name="name" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 30px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px">Choose Image :</td>
                                    <td style="padding: 5px"><input type="file" name="fimg" style="font-size:15px;"></td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px"></td>
                                    <td style="display: flex; justify-content: space-between;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="Submit" name="cmdSubmint" value="Submit" style="width: 200px; height: 40px; background-color: #002652; color: white; border: none; outline: none; cursor: pointer; margin-left: -100px; font-size: 15px;"/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="Reset" name="cmdReset" value="Cancel" style="width: 200px; height: 40px; background-color: red; color: white; border: none; outline: none; cursor: pointer; font-size: 15px;"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </td>
        </tr>
        </table>
        </div>
        <div class="right-side">
            <?php include('Rside.php') ?>
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>