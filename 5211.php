<?php
fscanf(STDIN, "%s", $m);
$music = explode('|' , $m);

$minor = 0;
$major = 0;
for($i=0;$i<count($music);$i++){
    $mm = substr($music[$i],0,1);

    if($mm == 'A' || $mm == 'D' || $mm == 'E'){
        $minor ++;
    }else if($mm == 'C' || $mm == 'F' || $mm == 'G'){
        $major ++;
    }
}


if($minor == $major){
    $arr_last=array_pop($music); // 마지막 배열값
    $last_note = substr($arr_last,0,1);

    if($last_note == 'A' || $last_note == 'D' || $last_note == 'E'){
        echo "A-minor";
    }else if($last_note == 'C' || $last_note == 'F' || $last_note == 'G') {
        echo "C-major";
    }
}else if($minor>$major){
    echo "A-minor";
}else{
    echo "C-major";
}
?>