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
    $last_arr=array_pop($music); // 마지막 배열값
    $last_note = substr($last_arr,-1);

    if($last_note == 'A' || $last_note == 'D' || $last_note == 'E'){
        print("A-minor");
    }else if($last_note == 'C' || $last_note == 'F' || $last_note == 'G') {
        print("C-major");
    }
}else if($minor > $major){
    print("A-minor");
}else{
    print("C-major");
}
?>