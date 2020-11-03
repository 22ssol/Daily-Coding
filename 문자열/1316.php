<?php
fscanf(STDIN, "%d", $n);

$str = array();
$sum = 0;
$group = array();


for($i=0;$i<$n;$i++){
    fscanf(STDIN, "%s", $str[]);
}

for($i=0;$i<$n;$i++) {
    $temp = array();

    for($j=0;$j<strlen($str[$i]);$j++) {
        $temp[$j] = substr($str[$i],$j,1);
    }
    array_push($group,$temp);
}
for($i=0;$i<$n;$i++) {
    $temp2 = array(); // 비교할 배열
    $an = array();
    for($j=0;$j<strlen($str[$i]);$j++) {
  //      echo $group[$i][$j]."\n";
    //    print_r($temp2);
        if(in_array($group[$i][$j],$temp2)){;
            if($group[$i][$j] != $temp2[count($temp2)-1]){
                array_push($an,1);

            }
        }else{
            array_push($an,0);
            array_push($temp2,$group[$i][$j]);
        }

    }
    //print_r($temp2);
    if(!in_array(1,$an)){
        $sum++;
    }

}

echo $sum;
?>