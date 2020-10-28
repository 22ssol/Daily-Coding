<?php
fscanf(STDIN, "%d", $n);

$cute = str_split($n);
$str = '';

if(count($cute) <= 2){
    $str = "◝(⑅•ᴗ•⑅)◜..°♡ 뀌요미!!";

}else{
    for($i=0;$i<count($cute)-2;$i++){
        if($cute[$i]-$cute[$i+1] == $cute[$i+1]-$cute[$i+2]){
            $str = "◝(⑅•ᴗ•⑅)◜..°♡ 뀌요미!!";
        }else{
            $str = "흥칫뿡!! <(￣ ﹌ ￣)>";
            break;
        }
    }
}


echo $str;

?>