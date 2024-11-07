<?php
 //問１
 $A = 10;
 $B = 20; //数値の代入
 if ($A > $B){ //AとBの比較（Aのほうが大きい）
    echo $A;
 } else if ($A < $B){ //AとBの比較（Bのほうが大きい）
    echo $B;
 } else if ($A == $B){ //AとBの比較（AとBの数値が同じ）
    echo $A," ",$B;
 };
 echo "\n";


 //問２
 $C = 22;
 if ($C % 2 == 0){ //2で割れる数が偶数
   echo "偶数";
 } else {
   echo "奇数";
 };
 echo "\n";

 //問３
 $score = 99;
 if ($score == 100){ //100点のみAA
   echo "AA";
 } else if ($score >= 90) { 
   echo "A";
 } else if ($score >= 80) {
   echo "B";
 } else if ($score >= 70) {
   echo "C";
 } else if ($score >= 60){
   echo "D";
 } else if ($score < 60){ //59点以下だとE
   echo "E";
 };
 echo "\n";

 //問４
 $D = -1;
 if ($D == 0){
   echo "0" ;
 } else if ($D > 0){
   echo "正の数" ;
 } else if ($D < 0){
   echo "負の数" ;
 };
 echo "\n";

 //問５
 $E = 72;
 if ($E <= 5) {
   echo "無料";
 } else if ($E <= 12){
   echo "200円";
 } else if ($E <= 69){
   echo "500円";
 } else if ($E >= 70){
   echo "無料";
 };
?>