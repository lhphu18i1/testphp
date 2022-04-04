<?php
//Cau 1
echo "Câu 1: <br/>";
for($i = 1; $i <= 100; $i ++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz $i" . "<br/>";
    } else if ($i % 3 == 0) {
        echo "Fizz $i" . "<br/>";
    } else if ($i % 5 == 0) {
        echo "Buzz $i" . "<br/>";
    }
}
 echo "<hr/>";
//Cau 2
echo "Câu 2: ";
$str = 'hoc php co ban den nang cao ';
echo  "Chuỗi có " . str_word_count($str) . " từ" . "<br/>" . "<hr/>";
//Cau 3
echo "Câu 3: ";
$str = "Le Hong Phu";
$check = "Phu";

if (strpos($str, $check) !== false) {
echo "Ton tai" . "<br/>" . "<hr/>";
} else {
echo "Khong ton tai "."<br/>" . "<hr/>";
}
//Cau 4
echo "Câu 4: ";
$str = 'Le Hong Phu';
echo  "Chuỗi có " . strlen($str) . " kí tự" . "<br/>" . "<hr/>";
//Cau 5
echo "Câu 5: "; 
$str = "123456789";
echo strrev($str) . "<br/>" . "<hr/>";
// Cau 6
echo "Câu 6: ";
$str = "hom nay toi lam bai test";
$str_search = "test";
if (strpos($str, $str_search) !== false) {
    echo "Chuỗi có chứa từ test" . "<br/>" . "<hr/>"; 
 }else{
     echo "không tồn tại từ test" . "<br/>" . "<hr/>";
 }
//Cau 7 
echo "Câu 7: ";
$str = 'Hello bro';
$str = str_replace( 'Hello', 'Hi', $str );
echo $str . "<br/>" ."<hr/>";
//Cau 8
//chuyển từ chữ thường sang chữ hoa
echo "Câu 8: ";
$str = 'hello bro';
echo strtoupper($str) . "<br/>";

//chuyển từ chữ hoa sang chữ thường
$str = 'hello bro';
echo strtolower($str) . "<br/>" . "<hr/>";
//Cau 9
echo "Câu 9: ";
$arr = array("Tôi", "tên", "là", "Lê", "Hồng", "Phú");
echo implode(" ",$arr) . "<br/>" . "<hr/>";
//Cau 10
echo "Câu 10: ";
$arr = array(0,1,2,3,4);
$arr = array_diff($arr, ["0", "3"]);
$phan_tu_can_chen = "Số 3";
array_splice($arr, 2, 0, $phan_tu_can_chen);
print_r($arr);
echo "<br/>" . "<hr/>";

//Cau 11
echo "Câu 11: ";
$arr=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
asort($arr);  
foreach($arr as $y=>$y_value)  
{  
  echo "Tuổi của ".$y." là: ".$y_value."<br/>" ;  
}  
?>
