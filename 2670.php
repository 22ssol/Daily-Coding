<?php
fscanf(STDIN, "%d", $number);
$num_Arr = array();
for($i=0 ; $i<$number ; $i++){
    fscanf(STDIN, "%f", $num_Arr[]);
}

$final_max = 0;

for($j=0;$j<$number;$j++){
    $multi = 1;

    for($k=$j ; $k<$number ; $k++){
        $multi *= $num_Arr[$k];

        if($final_max < $multi){
            $final_max = $multi;
        }else{
            $final_max = $final_max;
        }
    }
}

echo round($final_max,3);
?>