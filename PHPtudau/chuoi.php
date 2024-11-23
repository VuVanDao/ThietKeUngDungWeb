<?php
$string = "VuVanDao";
//lấy độ dài của chuỗi
echo "Độ dài chuỗi ".strlen($string);
echo '<br/>';
echo "Số lượng từ ".str_word_count("Vu Van Dao");
echo '<br/>';
echo 'Đảo ngược chuỗi '.strrev($string);
echo '<br/>';
echo 'Tìm từ '.strpos("Vu Van Dao","Da");
echo '<br/>';
echo 'Thay thế Vu Van Dao '.str_replace("Vu ","Nguyen","Vu Van Dao");
?>