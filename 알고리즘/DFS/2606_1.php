<?php

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $s);

$num1 = array();
$num2 = array();
$visit = array();

for ($i = 0; $i < $n+1; $i++) { // 컴퓨터와 배열 번호 맞추기 위해 +1만큼 반복
    $visit[$i] = 0;
}
for ($i = 0; $i < $s; $i++) {
    fscanf(STDIN, "%d %d", $tempa, $tempb);

    if (isset($num1[$tempa])){
        array_push($num1[$tempa] , $tempb);
    }
    else{
        $num1[$tempa] = [$tempb];
    }

    if (isset($num1[$tempb])){
        array_push($num1[$tempb] , $tempa);
    }
    else{
        $num1[$tempb] = [$tempa];
    }


}

//print_r($num1);

function find($target){
    global $num1,$visit;

    for ($j = 1; $j < count($num1)+1; $j++) {
        if(isset($visit[$j])){
        if ($target == $j && $visit[$j] == 0){
            $visit[$j] = 1;

            for($k = 0; $k <count($num1[$j]) ;$k ++){
                find($num1[$j][$k]);
            }
        }
        }

    }

}

find(1);
$values = array_count_values($visit);

echo $values[1] -1;

?>
