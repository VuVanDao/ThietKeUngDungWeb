<?php 
include "connect.php";
// include "CRUD.php";
$result =  mysqLi_query($conn,$sql);

// while($data = mysqLi_fetch_array($result)){
//   echo $data['id'].': '. $data['Họ']." ".$data["Tên"].'::'.$data['Email'].'<br/>';
// }

 echo $_POST["Ho"];
 echo $_POST["Ten"];
 echo $_POST["NgaySinh"];
 echo $_POST["ThangSinh"];
 echo $_POST["NamSinh"];
 echo $_POST["GioiTinh"];
 echo $_POST["NoiSong"];
 echo $_POST["MaBuuChinh"];
 echo $_POST["Email"];
 
 ?>