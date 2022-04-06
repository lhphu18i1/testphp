<?php
//Cau 1:Bài tập tính tổng : S = 1 + 2 + 3 + 4 + ... + n


$n = 10;
$total = 0;
for ($i = 1; $i <= $n; $i++) {
    $total += $i;
}
echo "Tổng là: " . $total . "<br/>" . "<hr/>";


//----------------------------------------------------------------------------------------------------------------------


//Cau 2:Tính tổng : S = 1 + 1*2 + 1*2*3 + 1*2*3*4 + ... + 1*2*3*4*...*n


$n = 3;
$total = 0;
for ($i = 1; $i <= $n; $i++) {
    $multiply = 1;
    for ($j = 1; $j <= $i; $j++) {
        $multiply = $multiply * $j;
    }
    $total = $total + $multiply;
}
echo $total;
echo  "<br/>" . "<hr/>";


//----------------------------------------------------------------------------------------------------------------------


//Cau 3:Tính tổng số nguyên lẻ tử 1 -> n


$n = 10;
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        $total += $i;
    }
}
echo "Tổng là: " . $total . "<br/>" . "<hr/>";


//----------------------------------------------------------------------------------------------------------------------


//Cau 4:Tính tổng số nguyên chẵn tử 1 -> n


$n = 10;
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $total += $i;
    }
}
echo "Tổng là: " . $total .  "<br/>" . "<hr/>";


//----------------------------------------------------------------------------------------------------------------------


//Cau 5:Bài tập tính S = 1! + 2! + 3! + ... + n!


$n = 3;
$total = 0;
$i = 1;
$j = 1;
$multiply = 1;
while ($i <= $n) {

    while ($j <= $i) {
        $multiply *= $j;
        $total += $multiply;
        $j++;
    }
    $i++;
}
echo 'Tổng khi n = ' . $n . ' là ' . $total . "<br/  >";


//Cau 6:Kiểm tra một số có phải là số nguyên tố hay không


    $number = 3;
    $i = 1;
    $isPrime = true;
    while($i < $number){
        if($number % $i == 0){
            $isPrime = false;
            break;
        }else{
            $isPrime = true;
        }
    }
    if($isPrime == true){
        echo "$number . là số nguyên tố ";
    }else{
        echo "$number . không phải là số nguyên tố";
    }


//----------------------------------------------------------------------------------------------------------------------


//Cau 7:In ra tất cả số nguyên tố nhỏ hơn n


function soNT($n){
    if($n < 2){
        return false;
    }
    for($i = 2; $i < sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }      
    }
    return true;
}

$n = 20;
echo "Các số nguyên tố nhỏ hơn $n là: ";
if($n >= 2){
    echo "1";
}
for($i = 3; $i < $n; $i+=2){
    if(soNT($i)){
        echo ',' . $i;
    }
}


//Cau 8:Vẽ tam giác cân


for ($i = 1; $i <= 4; $i++) { //tam giac
    for ($j = $i; $j < 4; $j++) {
        echo "&nbsp&nbsp";
    }

    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "<br>";
}


//----------------------------------------------------------------------------------------------------------------------


//Cau 9: Bài tập in bảng cửu chương


$n = 9;
for ($i = 1; $i <= $n; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>$i * $j = " . $i * $j . "</td>";
    }
    echo "</tr>";
}


//----------------------------------------------------------------------------------------------------------------------

//Cau 10:Bài toán tính tiền taxi với số km cho trước


    $n = 90 ;
    $total = 0;
    if ($n <= 1) 
    {
    	$total = 15000;
    	echo "số tiền cần trả là: " .$total;
    }else
    {
    	if ($n > 1 && $n <= 5) 
    	{
    		$total = 15000 + 12000 * ($n-1);
    		echo "số tiền cần trả là: " .$total;
    	}else
    	{
    		if ($n >= 6 && $n <= 140) 
    		{
    			$total = 15000 + 12000*4 + 90000*($n-5);
    			echo "số tiền cần trả là: " .$total;
    		}else
    		{
    			$total = (15000 + 12000*4 + 90000*134) * 14/100;
    			echo "số tiền cần trả là:" .$total;
    		}
    	}
     }


//----------------------------------------------------------------------------------------------------------------------

