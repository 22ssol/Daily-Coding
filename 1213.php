<?php


fscanf(STDIN, "%s", $word);
$arr_word = str_split($word);
natcasesort($arr_word); //문자열 오름차순 정렬
//print_r($arr_word);

$arr_word2 = array_count_values($arr_word); // 알파벳별 갯수
//echo count($arr_word2);
print_r($arr_word2);
$word_value = array_values($arr_word2); // value배열
$word_key  = array_keys($arr_word2); // key 배열

$hole = 0; //알파벳 갯수를 2로 나눴을 때 홀수인 알파벳 갯수
$final_word = "";
$mid_word = "";

for($i=0;$i<count($arr_word2);$i++){ //총 알파벳 갯수만큼 돌기
    if($word_value[$i] % 2 == 1){
        $hole = $hole +1;
        $mid_word = $word_key[$i];
    }

    for ($j = 0; $j < intval($word_value[$i] / 2); $j++) { //
      //  echo intval($word_value[$i] / 2);
        $final_word .= $word_key[$i];

        //echo $final_word . "/";
    }


    if($hole >=2){
        echo "I'm Sorry Hansoo";
        exit;
    }
}
echo ">".$final_word.">".$mid_word;
$revelse_word = strrev($final_word);
//echo $final_word. "            ".$revelse_word;
//echo $final_word.$mid_word.strrev($final_word);
?>


