<?php

$num = array();
$answer = array();

while(1){
    $i =  0;
    fscanf(STDIN, "%d", $num[]);
    $i++;
    if(in_array("0", $num)){
        break;
    }
}
for($i=0;$i<count($num)-1;$i++){
    for ($j = 0; $j < strlen($num[$i]); $j++) {
        if (substr($num[$i], $j, 1) == substr($num[$i], strlen($num[$i])-$j-1, 1)) {
            $result = "yes";
        } else {
            $result = "no";
            break;
        }
    }
    echo $result."\n";
}

?>
