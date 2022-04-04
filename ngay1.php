<?php
//Cau 1: Viết một chương trình để in ra các số từ 1 đến 100. 
// Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”. 
// Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.
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

// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 2:Nhập một sâu ký tự. Đếm số từ của sâu đó (mỗi từ cách nhau bởi một khoảng trắng có thể là một hoặc nhiều dấu cách, tab, xuống dòng). 
// Ví dụ ” hoc php co ban den nang cao ” có 7 từ.
echo "Câu 2: ";
$str = 'hoc php co ban den nang cao ';
echo  "Chuỗi có " . str_word_count($str) . " từ" . "<br/>" . "<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 3: Nhập 2 sâu ký tự s1 và s2. Kiểm tra xem sâu s1 có chứa s2 không?.
echo "Câu 3: ";
$str = "Le Hong Phu";
$check = "Phu";

if (strpos($str, $check) !== false) {
echo "Ton tai" . "<br/>" . "<hr/>";
} else {
echo "Khong ton tai "."<br/>" . "<hr/>";
}


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 4: Nhập vào 1 chuỗi và tính độ dài của một chuỗi


echo "Câu 4: ";
$str = 'Le Hong Phu';
echo  "Chuỗi có " . strlen($str) . " kí tự" . "<br/>" . "<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 5:Nhập vào 1 chuỗi và Đảo ngược chuỗi



echo "Câu 5: "; 
$str = "123456789";
echo strrev($str) . "<br/>" . "<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


// Cau 6:Nhập vào 1 chuối và tìm kiếm 1 chuỗi “test” trong chuỗi đã nhập


echo "Câu 6: ";
$str = "hom nay toi lam bai test";
$str_search = "test";
if (strpos($str, $str_search) !== false) {
    echo "Chuỗi có chứa từ test" . "<br/>" . "<hr/>"; 
 }else{
     echo "không tồn tại từ test" . "<br/>" . "<hr/>";
 }


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 7:Thay thế văn bản trong một chuỗi.


echo "Câu 7: ";
$str = 'Hello bro';
$str = str_replace( 'Hello', 'Hi', $str );
echo $str . "<br/>" ."<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 8
//chuyển từ chữ thường sang chữ hoa
echo "Câu 8: ";
$str = 'hello bro';
echo strtoupper($str) . "<br/>";

//chuyển từ chữ hoa sang chữ thường
$str = 'hello bro';
echo strtolower($str) . "<br/>" . "<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 9:Tạo 1 mảng và chuyển đổi mảng đã tạo thành kiểu chuỗi


echo "Câu 9: ";
$arr = array("Tôi", "tên", "là", "Lê", "Hồng", "Phú");
echo implode(" ",$arr) . "<br/>" . "<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 10:Cho 1 mảng array(‘0’,’1’,’2’,’3’,’4’). Đếm độ dài của mảng.Xóa phần tử đầu tiền và thứ 3 trong mảng. Sau khi xóa hãy chèn giá trị “số 3” vào mảng trên.


echo "Câu 10: ";
$arr = array(0,1,2,3,4);
$arr = array_diff($arr, ["0", "3"]);
$phan_tu_can_chen = "Số 3";
array_splice($arr, 2, 0, $phan_tu_can_chen);
print_r($arr);
echo "<br/>" . "<hr/>";


// ----------------------------------------------------------------------------------------------------------------------------------------


//Cau 11:Cho mảng array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40") Hãy sắp xếp mảng theo giá trị tăng dần, hiển thị tuổi nhỏ nhất và lớn nhất theo tên.


echo "Câu 11: ";
$arr=array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40"); 
asort($arr);  
foreach($arr as $y=>$y_value)  
{  
  echo "Tuổi của ".$y." là: ".$y_value."<br/>" ;  
}
?>
