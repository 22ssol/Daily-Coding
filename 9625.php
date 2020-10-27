<?php

fscanf(STDIN, "%d", $n);

$cha = 'A';

for($i=0;$i<$n;$i++){
    if(substr($cha, -1) == 'A'){
        $cha = $cha."B";}
    else if(substr($cha, -1) == 'B'){
        $cha = $cha."BA";
    }

}

echo $cha;
?>