<?php
fscanf(STDIN, "%d", $t);

for($i=0;$i<$t;$i++){
    fscanf(STDIN, "%d %d", $n[], $m[]);
}

for($i=0;$i<$t;$i++) {
    if($n[$i]>=12 && $m[$i]>=4){
        echo (12*$m[$i] - ($m[$i]-4))."\n";
    }else{
        echo "-1\n";
    }
}

?>