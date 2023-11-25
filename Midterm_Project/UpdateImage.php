<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <?php
    include('include/connect.php');
    $sfId = $_GET["fid"];
    $qwAll = 'SELECT * FROM tblData WHERE ID=' . $sfId;
    $rwAll = $conn->query($qwAll);
    $row = $rwAll->fetch_assoc();
    ?>
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

    .input {
        outline: none;
    }

    table tr td {
        display: flex;
        gap: 20px;
    }

    from {
        background-color: aqua;
    }
</style>

<body>
    <center>
        <?php include('include/header_Edit.php'); ?>
        <div class="container">
            <div class="con-table">
                <table>
                    <tr>
                        <td style="width:800px">
                    <tr>
                    <tr>
                        <td colspan="2" style="width:800px; vertical-align: top">
                            <form name="frmUpdate" action="include/qurUpdateImage.php" method="post" enctype="multipart/form-data">
                                <table style="width:800px; font-size:20pt; margin-left: 200px;">
                                    <tr>
                                        <td style="width:800px;padding: 5px">
                                            <h3> Updating New Image </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:800px;padding: 5px"><input type="text" name="txtId" hidden="true" style="width:650px;  font-size:20pt" value=<?php echo $row["ID"]; ?>></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">
                                            <font size="+2">
                                                <?php echo $row["ProName"]; ?>
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">
                                            <img name="imgCur" src="<?php echo $row["ImgUrl"]; ?>" width="300px" height="200px" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px"><input type="file" name="imgUpdate" style="width:650px;  font-size:20px"></td>
                                    </tr>


                                    <tr>
                                        <td style="padding: 5px">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="Submit" name="cmdSubmit" value="Submit" style="width: 100px; height: 30px; background-color: green; color: white; border: none; outline: none; cursor: pointer; margin-left: -50px; font-size: 15px;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="Reset" name="cmdReset" value="Cancel" style="width: 100px; height: 30px; background-color: red; color: white; border: none; outline: none; cursor: pointer; margin-left: 35px; font-size: 15px;">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
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