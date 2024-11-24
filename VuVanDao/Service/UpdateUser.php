<?php
include "connectService.php";
$sql = 'SELECT * FROM yahoo';
$id='';
$tenHo=$_POST['Ho'];
$tenGoi=$_POST['Ten'];
$email = $_POST['Email'];
$NgaySinh=$_POST['birth-day'];
$ThangSinh=$_POST['birth-month'];
$NamSinh=$_POST['birth-year'];
$GioiTinh = $_POST['gender'];
$NoiSong = $_POST['NoiSong'];
$MaNhanVien=$_POST['MaNhanVien'];
$sql = " UPDATE `yahoo` 
         SET `Ho`='$tenHo',`Ten`='$tenGoi',`NgaySinh`='$NgaySinh',`ThangSinh`='$ThangSinh'
         ,`NamSinh`='$NamSinh',`GioiTinh`='$GioiTinh',`NoiSong`='$NoiSong',`MaNhanVien`='$MaNhanVien'
         ,`Email`='$email'
         WHERE MaNhanVien = $MaNhanVien"; 
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