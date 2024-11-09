<?php
 //問１
 for ($val = 1;$val <= 10;$val++){ //初期値1。1増やしながら10回繰り返す
    echo $val; 
    echo "\n";
 };
 echo "\n";


 //問２
 $start = 1; //初期値の変数宣言
 $end = 50;
 $total = 0;
 for ($i =$start ;$i <= $end;$i++){ //1から50までの計算$1に1ずつ足していく
    $total += $i; //変数＝変数＋計算式
 };
 echo $total;
 echo "\n";

 echo "\n";

 //問３
 for ($score = 10;$score >- 1;$score--){ //10から1ずつ引いて表示
    echo $score;
    echo "\n";
 };
 echo "\n";

?>