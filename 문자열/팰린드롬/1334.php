<?php

fscanf(STDIN, "%s", $n);

$stop = false;

while (1) {
    if ($stop == true) {
        echo $n;
        break;
    }

    $n += 1;
    for ($i = 0; $i < strlen($n); $i++) {
        if (substr($n, $i, 1) == substr($n, strlen($n) - $i - 1, 1)) {
            $stop = true;
            continue;
        } else {
            $stop = false;
            break;
        }
    }

}


?>