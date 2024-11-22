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
$sql = " INSERT INTO `yahoo` (`id`, `Ho`, `Ten`, `NgaySinh`, `ThangSinh`, `NamSinh`, `GioiTinh`, `NoiSong`, `MaNhanVien`, `Email`, `pass`) 
         VALUES (NULL, '$tenHo', '$tenGoi', $NgaySinh, $ThangSinh, $NamSinh, '$GioiTinh', '$NoiSong', '$MaNhanVien', '$email', '$pass');"; 
mysqLi_query($conn,$sql);

?>