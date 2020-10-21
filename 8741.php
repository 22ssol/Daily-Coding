<?php
fscanf(STDIN, "%d", $k);

$sum = (pow(2,$k)-1) * pow(2,$k-1); // 0 ~ (2^k -1) 까지의 합 구하기


//printf("%s",decbin($sum)); //이진수로 변환한 결과값 출력
echo (string)decbin($sum); // 문자로 다시 변환하여 출력함
?>