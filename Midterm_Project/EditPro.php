<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    table {
        border-collapse: collapse;
        margin-top: 20px;
        border: none;
        border-bottom: 3px solid green;
    }
    th{
        background-color: #5298A1;
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
    }

    td img {
        width: 60px;
        height: 60px;
    }

    th,
    td {
        padding: 10px;
    }

    .tbl-btn {
        display: flex;
        gap: 10px;
    }

    .tbl-btn button {
        width: 80px;
        height: 30px;
        border: none;
        border-radius: 5px;
    }

    .tbl-btn button a {
        color: white;
        text-decoration: none;
    }

    .tbl-btn .btn-1 {
        background-color: blue;
    }

    .tbl-btn .btn-2 {
        background-color: green;
    }

    .tbl-btn .btn-3 {
        background-color: red;
    }

    .container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 40px;
    }

    .btn-Edit {
        width: 100px;
        height: 30px;
        border: none;
        background-color: #007347;
    }

    .btn-search {
        width: 400px;
        height: 30px;
        outline: none;
        border: 2px solid #007347;
        padding: 0px 0px 0px 5px;
    }

    .submit {
        color: white;
        cursor: pointer;
    }
</style>

<body>
    <?php include('include/header_Edit.php'); ?>
    <div class="container">
        <div>
            <button class="btn-Edit"><a href="./add-new.php">Add New</a></button>
        </div>
        <div>
            <input type="search" placeholder="Search by name Or id........" class="btn-search">
            <input type="submit" value="Search" class="btn-Edit submit">
        </div>
    </div>
    <div>
        <?php include './include/Qur_EditPro.php'; ?>
    </div>
</body>

</html>