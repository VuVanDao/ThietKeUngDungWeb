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
        .container {
  width: 100vw;
  height: 100vh;
   display:flex;
            justify-content: center;
            align-items:center;
  --s: 100px; /* control the size */
  --c1: #f8b195;
  --c2: #355c7d;

  --_g: var(--c2) 4% 14%, var(--c1) 14% 24%, var(--c2) 22% 34%,
    var(--c1) 34% 44%, var(--c2) 44% 56%, var(--c1) 56% 66%, var(--c2) 66% 76%,
    var(--c1) 76% 86%, var(--c2) 86% 96%;
  background: radial-gradient(
      100% 100% at 100% 0,
      var(--c1) 4%,
      var(--_g),
      #0008 96%,
      #0000
    ),
    radial-gradient(
        100% 100% at 0 100%,
        #0000,
        #0008 4%,
        var(--_g),
        var(--c1) 96%
      )
      var(--c1);
  background-size: var(--s) var(--s);
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