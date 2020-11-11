<?php

fscanf(STDIN, "%d", $t);
$ps = array();
for($i=0;$i<$t;$i++){
    fscanf(STDIN, "%s", $ps[]);
}
for($i=0;$i<$t;$i++){
    $dap = 0;
    for($j=0;$j<strlen($ps[$i]);$j++){
        $str = substr($ps[$i], $j, 1);
        if($str == "("){
            $dap = $dap + 1;
        }else if($str == ")"){
            $dap = $dap - 1;

        }

        if($dap < 0 ){
            break;
        }

    }

    if($dap == 0){
        echo "YES\n";
    }else{
        echo "NO\n";
    }

}

?>