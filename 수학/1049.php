<?php
fscanf(STDIN, "%d %d", $guita,$money);

for($i=0 ; $i<$money ;$i++){
    fscanf(STDIN, "%d %d", $brand[],$each[]);
}

//echo min($brand); // 패키지 작은 값
//echo min($each); // 각자 작은 값

//case 1
$price1 = $guita * min($each);
//echo " case 1:".$price1;

//case 2
$price2 = ceil($guita / 6)*min($brand);


//case 3
$mog = ($guita - ($guita % 6)) / 6; //몫
$na = $guita % 6; //나머지
$price3 = ($mog * min($brand) ) + ($na * min($each));

$total_price = array($price1,$price2,$price3);
echo min($total_price);


?>