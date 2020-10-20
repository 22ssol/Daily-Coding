<?php
fscanf(STDIN, "%d", $n);

$sum=0;
$sum2=0;

for($i=1;$i<=$n;$i++) {
    $sum = $sum + $i;
}
echo "1차 합계".$sum ." ///// ";
$binary_num = decbin($sum); //1. 이진수로 변환
echo "2진수 변환".$binary_num." ///// ";
//strlen($binary_num); // 변환한 이진수가 몇 자리인지.
$num = '1';

for($i=0;$i<strlen($binary_num);$i++){
    $num =$num*'2'; //2. 이진수의 길이를 구해서 그 길이만큼의 1이 들어간 이진수를 만든다.
}
echo "2차 이진수".$num ." ///// ";
//echo "2진수 변환".bindec($num) ." ///// ";
for($i=1;$i<$num;$i++) {
    $sum2 = $sum2 + $i; //3. 2번의 이진수를 십진수로 변환해서 싹 더함
}
printf(decbin($sum2)); //이진수로 변환

?>