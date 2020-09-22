<?php
fscanf(STDIN, "%d", $number);
$num_Arr = array();
for($i=0 ; $i<$number ; $i++){
    fscanf(STDIN, "%f", $num_Arr[]);
}

$final_max = $num_Arr[0];

for($j=1;$j<$number;$j++){
    if($num_Arr[$j] * $num_Arr[$j-1] >= $num_Arr[$j]){
        $num_Arr[$j] = $num_Arr[$j] * $num_Arr[$j-1];
    }
    $final_max = max($num_Arr);

}

echo round($final_max,3);


?>