<?php
fscanf(STDIN, "%d", $n);

$str = array();
$s = array();

for($i=0;$i<$n;$i++){
   $line = fgets(STDIN,1024); //fscanf로 입력받을 경우 띄어쓰기의 경우 입력 안됨. 그래서 fgets를 사용
    $str[$i]=$line;
}

for($i=0;$i<$n;$i++) {
    $temp = array();
    $temp = explode(' ', $str[$i]);
    array_push($s,$temp);
}

print_r($s);
?>