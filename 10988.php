<?php

fscanf(STDIN, "%s", $word);

//echo strlen($word);

for ($i = 0; $i < strlen($word); $i++) {
    if ($word[$i] == $word[strlen($word) - $i - 1]) {
        $result = "1";
    } else {
        $result = "0";
        break;
    }

}

echo $result;



