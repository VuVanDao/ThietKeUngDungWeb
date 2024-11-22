<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    button{
      text-decoration:none;
      padding: 5px 10px;
      border-radius:5px;
      cursor: pointer;
      font-weight:700;
      margin:5px;
    }
    a{
      text-decoration:none;
    }
    .add a{
      color:orange;
    }
    button:hover{
      opacity: 0.5;
    }
    .add{
      color:orange;
      border:1px solid orange;
    }
   
   
    .container{
      padding: 0 50px;
    }
    table {
      
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  </style>
</head>
<body>
  <?php
include "connect.php";
//lấy dữ liệu từ bảng
$sql = 'SELECT * FROM yahoo';

$result =  mysqLi_query($conn,$sql);
//tạo mới dữ liệu

//xoá
// $sql = "DELETE FROM `info` WHERE id = 6;";

//update
// $sql = "UPDATE `info` SET `email`='$email',`pass`='$pass',`username`='$username' WHERE id = 10;";

//không có cái này không chạy được
mysqLi_query($conn,$sql);

//hàm lấy từng dữ liệu trong bảng info
// while($data = mysqLi_fetch_array($result)){
//     if($data['Email'])
//   echo $data['id'].': '. $data['Ho']." ".$data["Ten"].'::'.$data['Email'].'<br/>';

// }

?>

<div style="text-align: center;">
      <h1>Danh sách thông tin người dùng</h1>
    </div>
<div style="text-align: center;font-size: 20px;margin-bottom:30px;" >
      <button class="add" ><a href="./AddNewUser.php">Thêm mới người dùng</a></button>
    </div>

<div class="container">
  <form  method="POST" action="UpdateUser.php">
    <table >
      <tr>      
        <th>Mã nhân viên</th>
        <th>Ho</th>
        <th>Ten</th>
        <th>Sinh nhật</th>
        <th>Giới tính</th>
        <th>Nơi sống</th>
        <th>email</th>
      </tr>
      <tr>
        <?php
             $sql = 'SELECT * FROM yahoo';
             $result =  mysqLi_query($conn,$sql);
             while($data = mysqLi_fetch_array($result)){
              
       ?>
       <td> 
        <input type="hidden" name="MaNhanVien" value=<?php echo $data["MaNhanVien"]?>>
        <?php echo $data["MaNhanVien"]?>
      </td>
      <td>
         <input type="hidden" name="Ho" value=<?php echo $data["Ho"]?>> 
         <?php echo $data["Ho"]?>
      </td>
      <td> 
        <input type="hidden" name="Ten" value=<?php echo  $data["Ten"]?>>
        <?php echo $data["Ten"]?>
      </td>
      <td> 
        <input type="hidden" name="NgaySinh" value=<?php echo $data["NgaySinh"]?>>
        <input type="hidden" name="ThangSinh" value=<?php echo $data["ThangSinh"]?>>
        <input type="hidden" name="NamSinh" value=<?php echo $data["NamSinh"]?>>
        <?php echo $data["NgaySinh"]."/".$data["ThangSinh"]."/".$data["NamSinh"]?>
      </td>
      <td> 
        <input type="hidden" name="GioiTinh" value=<?php echo $data["GioiTinh"]?>> 
        <?php echo $data["GioiTinh"]?>
      </td>
      <td> 
        <input type="hidden" name="NoiSong" value=<?php echo $data["NoiSong"]?>>
        <?php echo $data["NoiSong"]?>
      </td>
      <td  > 
        <input type="hidden" name="Email" value=<?php echo $data["Email"]?>>
        <?php echo $data["Email"]?>
      </td>
    </tr>
       <?php            
       } 
       ?>
    </table>
  </form>
 
</div>
    <script src="./main.js"></script>
</body>
</html>

              