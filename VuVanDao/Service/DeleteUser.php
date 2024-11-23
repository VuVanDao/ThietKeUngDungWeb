<?php
include "connectService.php";
$sql = 'SELECT * FROM yahoo';
$MaNhanVien=$_POST['MaNhanVien'];
$sql = "DELETE FROM `yahoo` WHERE MaNhanVien = $MaNhanVien;";
mysqLi_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 100vw;
            height:100vh;
            display:flex;
            justify-content: center;
            align-items:center;
        }
        .link{
            text-decoration:none;
            border:3px solid;    
            padding: 30px;
            border-radius:5px;
        }
    </style>
</head>
<body>
   <div class="container"> <a class="link" href="../CRUD.php">Trở về trang chủ</a></div>
</body>
</html>