<?php
 //問1
 for ($val = 10;$val <= 100;$val += 10){ //10ずつ増えていく
    echo $val; 
    echo "\n";
 };
 echo "\n";

 //問２
 $start = 2; //初期値定義
 $end = 100;
 $total = 0;
 for ($i = $start;$i <= $end;$i = $i + 2){ //2ずつ加算
    $total += $i;
 };
 echo $total;
 echo "\n";

 echo "\n";

 //問３
 for ($score =1;$score <= 100;$score++){
    if ($score % 15 === 0){ //15で割り切れるとき
        echo "FizzBuzz";
    } else if ($score % 3 === 0){ //3で割り切れるとき
        echo "Fizz";
    } else if ($score % 5 === 0){ //5で割り切れるとき
        echo "Buzz";
    } else {
        echo $score; //上記以外の場合
    }
    echo "\n";

 };
 echo "\n";

 //問４
 $A = 1;
 $B = 2;
 $C = 3;
 $D = 4;
 $E = 5;
 echo max($A,$B,$C,$D,$E); //最大値の表示
 echo "\n";

 echo "\n";


 //問５

 $kaibun ='たけやぶやけた';
 $text_kaibun = mb_strlen($kaibun, 'UTF-8'); //文字列の長さを取得、マルチバイトを使用
 // var_dump ($text_kaibun);
 $array = []; //配列にする
 for ($i = 0; $i < $text_kaibun; $i++){ 
    $kotae = mb_substr($kaibun, $i, 1); //i番目の文字から1文字ずつ取り出して処理
    $array[] = $kotae; //取得した文字を配列に追加
 }
 //echo implode(array_reverse($array));  //逆順で表示できているか（文字化けなど）
 if ((array_reverse($array)) === $array){  //逆順との比較、演算子”＝＝＝”完全一致してるか確認
    echo "回文です";
 } else {
    echo "回文じゃない";
 };

// ?>