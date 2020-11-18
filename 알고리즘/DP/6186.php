<?php

fscanf(STDIN, "%d %d", $r, $c);
$b = array();
$bessie = array();
for ($i = 0; $i < $r; $i++) {
    fscanf(STDIN, "%s", $b[]);
}
for ($i = 0; $i < $r; $i++) {
    $temp = array();

    for ($j = 0; $j < strlen($b[$i]); $j++) {
        $temp[$j] = substr($b[$i], $j, 1);
    }
    array_push($bessie, $temp);
}

$visit = array(); //방문 배열


for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $c; $j++) {
        if ($bessie[$i][$j] == '#') {
            $visit[$i][$j] = true;
            dfs($i, $j);
        }

    }
}

function dfs($x, $y)
{
    echo $x." ".$y."\n";
    $visit[$x][$y] = true;
    global $bessie, $r, $c;
    $dX = array(0, 0, -1, 1);
    $dY = array(1, -1, 0, 0);

    for ($i = 0; $i < 4; $i++) {
        $newX = $x + $dX[$i];
        $newY = $y + $dY[$i];
        if (($newX >= 0 && $newY >= 0) && ($newX < $r && $newY < $c)) {
            if ($bessie[$newX][$newY] == '#' && $visit[$newX][$newY] != true) {
                dfs($newX, $newY);
            }
        }


    }

}

print_r($bessie);
?>