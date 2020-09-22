<?php
fscanf(STDIN, "%d", $number);
$num_Arr = array();
for($i=0 ; $i<$number ; $i++){
    fscanf(STDIN, "%f", $num_Arr[]);
}

$final_max = 0;

for($j=0;$j<$number;$j++){

    if($num_Arr[$j] >= $number-1){
        $num_Arr[$j+1] = 1;
        $num_Arr[$j+2] = 1;
    }
    $num1 = $num_Arr[$j] * $num_Arr[$j+1];


    if($num_Arr[$j] > $final_max){
        $final_max = $num_Arr[$j];
=
        if($final_max < $final_max*$num_Arr[$j+2]){
            $final_max = $final_max*$num_Arr[$j+2];
        }
        =

    }

}

echo round($final_max,3);


?>