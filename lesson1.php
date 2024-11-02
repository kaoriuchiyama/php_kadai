<?php
 $word1 = "Hello World"; //変数に代入
 echo $word1 ; //変数の出力
 echo "\n";//改行

 echo $word1."Welcome Kaori"; //連結出力
 echo "\n";

 $apple = 200 * 3; // 600円
 $orange = 100 * 4; // 400円
 echo $apple;
 echo "\n";
 echo $orange;
 echo "\n";
 
 $color = ["red","blue","green"] ; //配列に格納
 echo $color[1]; //出力する情報の指定
 echo "\n";
 
 $profile1 = [
    [
        "名前" => "佐藤",
        "年齢" => 36,
        "職業" => "営業",
    ],
    [
        "名前" => "田中",
        "年齢" => 23,
        "職業" => "事務",
    ],
    [
        "名前" => "吉田",
        "年齢" => 54,
        "職業" => "社長",
    ],
 ];
 //  var_dump ($profile1); //配列全部を出力
 //  var_dump ($profile1[1]); //配列１を出力
 echo $profile1[1]["年齢"];

?>