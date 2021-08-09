<?php
// 今有陣列資料 0.1.2.3.4.5.6.7.8.9 請寫出資料處理程式碼 
// 1. 計算出「奇數值總和」減去「偶數值總和」 
// 2. 分割成二陣列,分別存放「偶數值」及「奇數值」 
function Q3($arr){
    $odd_sum=0;//奇數
    $even_sum=0;//偶數
    $odd=array();
    $even=array();
    for($i=0;$i<count($arr);$i++){
         if($arr[$i]%2==0){
             $even_sum+=$arr[$i];
             array_push($even,$arr[$i]);
         }else{
            $odd_sum+=$arr[$i];
            array_push($odd,$arr[$i]);
         }
    }
    echo "奇數和減偶數和= ".($odd_sum-$even_sum);
    echo "</br>";
    echo "奇數陣列:".implode(",",$odd);
    echo "</br>";
    echo "偶數陣列:".implode(",",$even);
    echo "</br>";
}
$arr=array(0,1,2,3,4,5,6,7,8,9);
Q3($arr);
?>