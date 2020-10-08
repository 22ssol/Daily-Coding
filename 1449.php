<?php

fscanf(STDIN, "%d %d", $n, $l);

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d", $location[]);
}

sort($location); // 1.배열 정렬
print_r($location);

$count = 0;

for($i=0;$i<$n;$i++){ // 물 새는 위치만큼 반복
    $min = $location[$i] - 0.5 ; //물 새는 곳 최소
    $max = $min + $l; // 물 새는 곳 최대
   // echo $min."---";

    if($min < $location[$i+1] && $location[$i+1] < $max ){ // 최소 < 다음길이 && 다음길 < 최대 일 때
        $count ++; // 테이프 사용 추가
    }

}

echo $count;

?>