<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Transportation</title>
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
    .container-place{
        width: 800px;
        display: flex;
        border-radius: 10px;
        margin-left: 100px;
        background-color: #F2F2F2;
        box-shadow: 1px 3px 6px 2px solid black;
    }
    .qur-img img{
        width: 300px;
        height: 250px;
        border-radius: 10px 0px 0px 10px;
    }
    .Proname{
        width: 500px;
        height: 30px;
        margin-left: 10px;
    }
    .des p{
        word-spacing: 2px;
        display: table-cell;
        word-wrap:normal;
    }
    .Proname a{
        color: blue;
    }
    .des{
        margin-left: 10px;
        width: 500px;
    }
    .des{
        width: 480px;
    }
    .rate{
        margin-left: 10px;
    }
</style>

<body>
    <?php include('include/header.php'); ?>
    <div class="container">
        <div class="con-table">
            <table>
                <tr>
                    <td style="width:910px">
                        <hr>
                        <center><h2>Transportation</h2></center>
                        <br>
                        <?php include('include/hqur_allTransportation.php'); ?>
                        <hr>
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