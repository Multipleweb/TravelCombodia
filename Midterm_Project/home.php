<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cambodia Travel</title>
</head>
<style>
    *{
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
    h2{
       width: 170px;
       height: 50px;
       background-color: green;
       color: white !important;
       display: flex;
       justify-content: center;
       align-items: center;
    }
    
</style>

<body>
    <?php include('include/header.php'); ?>
    <div class="container" id="main">
        <div class="con-table">
            <table>
                <tr>
                    <td style="width:920px">
                        <hr>
                        <br>
                        <center><h2>Places to Visit</h2></center>
                        <br>
                        <br>
                        <?php include('include/hqur_placetovisit.php'); ?>
                        <hr>
                        <br>
                        <center><h2>Package Tours</h2></center>
                        <br>
                        <br>
                        <?php include('include/hqur_TourPackae.php'); ?>
                        <hr>
                        <br>
                        <center><h2>Hotels</h2></center>
                        <br>
                        <br>
                        <?php include('include/hqur_Hotels.php'); ?>
                        <hr>
                        <br>
                        <center><h2>Transportation</h2></center>
                        <br>
                        <br>
                        <?php include('include/hqur_Trasportation.php'); ?>
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