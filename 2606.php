<?php
fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%d", $s);

$num1 = array();
$num2 = array();
$visit = array();
$temp = '';


for($i=0 ; $i<$s ;$i++){
    fscanf(STDIN, "%d %d", $num1[] ,$num2[]);
    $visit[$i] = 0;

}


function find($temp,$count)
{
    global $total, $s,$num1,$num2;

    for ($j = 0; $j < $s; $j++) {
        if (($num1[$j] == $temp) && ($visit[$j] == 0)) {
            $count+=1;
            $visit[$j] = 1;
            $count = find($num2[$j],$count);
        }
    }
    return $count;
}

echo find(1,0) -1;


?>