<?php

fscanf(STDIN, "%d", $n);

$a = array(1,0);
$b = array(0,1);

for($i=0;$i<$n-1;$i++){
    array_push( $a, $a[$i]+$a[$i+1] );
    array_push( $b, $b[$i]+$b[$i+1] );
}

echo array_pop($a). " ". array_pop($b);

?>