<?php

fscanf(STDIN, "%d %d", $a, $b);
fscanf(STDIN, "%d", $c);

if($a+$b >= (2 * $c)){
    printf(($a+$b)-2*$c);
}else{
    printf($a+$b);
}

?>