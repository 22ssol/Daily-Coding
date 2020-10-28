<?php
fscanf(STDIN, "%d", $number);
$num_Arr = array();
for($i=0 ; $i<$number ; $i++){
    fscanf(STDIN, "%f", $num_Arr[]);
}

$final_max = -1;
$multi = 1;

for($j=0;$j<$number;$j++){
    $multi *= $num_Arr[$j];

    if($multi > $final_max){
        $final_max = $multi;
    }
    if($multi < 1){
        $multi = 1;
    }

}

echo round($final_max,3);


?>