<?php
fscanf(STDIN, "%d", $n);

for($i=0;$i<$n;$i++){
    fscanf(STDIN, "%d %s", $team[], $time[]);
}

//print_r($time);
$t1_score = 0;
$t2_score = 0;
$t1_time = '';
$t2_time = '';
$win_time1 = 0;

for($i=0;$i<$n;$i++) {
    if($team[$i] == 1){
        $t1_score ++;
    }else if($team[$i] == 2){
        $t2_score ++;
    }
    if($t1_score > $t2_score){
        $t1_time = $time[$i] - $win_time1;
    }
    if($t1_score < $t2_score){
        $winner= '2';
    }
}
?>