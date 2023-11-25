<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
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

    <?php include('include/header_Edit.php'); ?>

    <div class="container">
        <div class="con-table">
            <div>
            <table style="width:800px">
                <tr>
                    <td style="width:800px; vertical-align: top">
                        <?php
                        $img = $_FILES["fimg"]["name"];
                        $rand = rand();
                        $imgU = $rand . $img;
                        $path  = "image/" . $imgU;
                        move_uploaded_file($_FILES['fimg']['tmp_name'], $path);

                        $date = date('Y/m/d H:m:s');
                        include('include/connect.php');

                        $queryAdd = 'Insert into tblData (ProName, CatId, Description, DesUrl, ImgUrl, DateIn) 
                            Values("' . $_POST["name"] . '",
                            "' . $_POST["CatType"] . '",
                            "' . $_POST["des"] . '",
                            "' . $_POST["deslink"] . '",
                            "' . $path . '",
                            "' . $date . '")';
                        //Check From Here  
                        if (mysqli_query($conn, $queryAdd)) {
                            echo '<div>';
                            echo '"<h1>"The Post Summary !!!"</h1>"';
                            echo 'New record created successfully!';
                            $sql = 'SELECT * FROM tblData Order By DateIn DESC Limit 1';
                            $rTop = $conn->query($sql);
                            if ($rTop->num_rows > 0) {
                                while ($row = $rTop->fetch_assoc()) {
                                    echo '<br> Posted ID : ' . $row["ID"];
                                    echo '<br> Posted Name : ' . $row["ProName"];
                                    echo '<br> Posted Category : ' . $row["CatId"];
                                    echo '<br> Posted Description : ' . $row["Description"];
                                    echo '<br> Posted URL : ' . $row["DesUrl"];
                                    echo '<br> Posted Image : <br> <img
                          src = "' . $row["ImgUrl"] . '" width="400px" height="350px"/><br>';
                          echo '</div>';
                                }
                            } else echo '0 results';
                        } else
                            echo "Error: " . $queryAdd . "<br>" . mysqli_error($conn);

                        $conn->close();
                        ?>
                    </td>
                    </tr>
            </table>
            </div>
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