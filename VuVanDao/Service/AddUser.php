<?php
include "connectService.php";
$sql = 'SELECT * FROM yahoo';
$id='';
$tenHo=$_POST['Ho'];
$tenGoi=$_POST['Ten'];
$NgaySinh=$_POST['birth-day'];
$ThangSinh=$_POST['birth-month'];
$NamSinh=$_POST['birth-year'];
$GioiTinh = $_POST['gender'];
$NoiSong = $_POST['NoiSong'];
$MaNhanVien=$_POST['MaNhanVien'];
$email=$_POST['Email'];
$pass = '11082004';
if(isset($tenHo) && isset($tenGoi) && isset($NgaySinh) && isset($ThangSinh) && isset($NamSinh) && isset($GioiTinh) && isset($MaNhanVien) ||isset($email) ||isset($pass) ){
$sql = " INSERT INTO `yahoo` (`id`, `Ho`, `Ten`, `NgaySinh`, `ThangSinh`, `NamSinh`, `GioiTinh`, `NoiSong`, `MaNhanVien`, `Email`, `pass`) 
         VALUES (NULL, '$tenHo', '$tenGoi', $NgaySinh, $ThangSinh, $NamSinh, '$GioiTinh', '$NoiSong', '$MaNhanVien', '$email', '$pass');"; 
mysqLi_query($conn,$sql);
} else {
    echo "siu";
}


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