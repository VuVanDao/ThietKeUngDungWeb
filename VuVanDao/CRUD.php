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
    button:hover{
      opacity: 0.5;
    }
    .add{
      color:orange;
      border:1px solid orange;
    }
    .action{
      text-align:center;
    }
    .update{
      color:green;
      border:1px solid green;
    }
    .delete{
      color:red;
      border:1px solid red;
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
// $id=11;
// $tenHo='Vũ Văn';
// $tenGoi='Đạo';
// $NgaySinh='11';
// $ThangSinh='08';
// $NamSinh='2004';
// $GioiTinh = 'Nữ';
// $NoiSong = "Nam Định";
// $Fax='';
// $email='Dao28905@gmail.com';
// $pass = '11082004';
$result =  mysqLi_query($conn,$sql);
//tạo mới dữ liệu
// $sql = " INSERT INTO `yahoo` (`id`, `Họ`, `Tên`, `Ngày sinh`, `Tháng sinh`, `Năm sinh`, `Giới tính`, `Nơi sống`, `Mã bưu chính`, `Email`, `pass`)
//          VALUES (NULL, '$tenHo', '$tenGoi', '$NgaySinh', '$ThangSinh', '$NamSinh', '$GioiTinh', '$NoiSong', '$Fax', '$email', '$pass');"; 

//xoá
// $sql = "DELETE FROM `info` WHERE id = 6;";

//update
// $sql = "UPDATE `info` SET `email`='$email',`pass`='$pass',`username`='$username' WHERE id = 10;";

//không có cái này không chạy được
mysqLi_query($conn,$sql);

//hàm lấy từng dữ liệu trong bảng info
// while($data = mysqLi_fetch_array($result)){
//     if($data['Email'])
//   echo $data['id'].': '. $data['Họ']." ".$data["Tên"].'::'.$data['Email'].'<br/>';

// }
?>

<div style="text-align: center;">
      <h1>Danh sách thông tin người dùng</h1>
    </div>
<div style="text-align: center;font-size: 20px;margin-bottom:30px;" >
      <button class="add" href="./index1.html">Thêm mới người dùng</button>
    </div>

<div class="container">
  <form  method="POST" action="UpdateUser.php">
    <table>
      <tr>      
        <th>Họ</th>
        <th>Tên</th>
        <th>Sinh nhật</th>
        <th>Giới tính</th>
        <th>Nơi sống</th>
        <th>Mã bưu chính</th>
        <th>email</th>
        <th>Chức năng</th>
      </tr>
      <tr>
        <?php
             $sql = 'SELECT * FROM yahoo';
             $result =  mysqLi_query($conn,$sql);
             while($data = mysqLi_fetch_array($result)){
       ?>
      <td>
         <input type="hidden" name="Ho" value=<?php echo $data["Họ"]?>> 
         <?php echo $data["Họ"]?>
      </td>
      <td> <input type="hidden" name="Ten" value=<?php echo  $data["Tên"]?>><?php echo $data["Tên"]?></td>
      <td> 
        <input type="hidden" name="NgaySinh" value=<?php echo $data["Ngày sinh"]?>>
        <input type="hidden" name="ThangSinh" value=<?php echo $data["Tháng sinh"]?>>
        <input type="hidden" name="NamSinh" value=<?php echo $data["Năm sinh"]?>>
       <?php echo $data["Ngày sinh"]."/".$data["Tháng sinh"]."/".$data["Năm sinh"]?></td>
      <td> <input type="hidden" name="GioiTinh" value=<?php echo $data["Giới tính"]?>> <?php echo $data["Giới tính"]?></td>
      <td> <input type="hidden" name="NoiSong" value=<?php echo $data["Nơi sống"]?>><?php echo $data["Nơi sống"]?></td>
      <td> <input type="hidden" name="MaBuuChinh" value=<?php echo $data["Mã bưu chính"]?>><?php echo $data["Mã bưu chính"]?></td>
      <td> <input type="hidden" name="Email" value=<?php echo $data["Email"]?>><?php echo $data["Email"]?></td>
      <td class='action'> 
        <button  class='update'>Sửa thông tin</button>                                                        
        <button  class='delete'>Xoá người dùng</button></td>
    </tr>
    <input type="hidden" name="td_1" value="value_1">
       <?php
       } 
       ?>
    </table>
  </form>
</div>
</body>
</html>

              