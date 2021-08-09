<?php
// 請寫出將字串「人易科技:上機測驗 - 演算法」中的: 
// 1. 字元「:」改成全型 
// 2. 去掉中文字間的空白(保留一號二側空白) 
// 3. 列印出符號:到-之間的字元 
function Q2($str){
    $new_s=str_replace(':','：',$str);
    echo $new_s; //全形
    echo "</br>";
    $line=strpos($new_s,'-');
    $before=str_split($new_s,$line-1);
    $after=str_split($new_s,$line+1);
    $str2=str_replace(' ', '', $before[0]).' - '.str_replace(' ', '', $after[1]);
    echo $str2;//去除文字空白
    echo "</br>";
    $begin=strpos($str2,'：');
    $end=strpos($str2,'-')+1;
    $str3=substr($str2, $begin, $end-$begin);
    echo $str3;//印出字串
    echo "</br>";   
}
$str="人易科技:上 機 測 驗 - 演算法";
Q2($str);
?>