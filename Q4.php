<?php
// 今有一陣列資料 77,5,5,22,13,55,97.4.796.1.0.9 請寫出正序排列處理程式碼 
// 本題需自行完成演算法,不可使用現成排序函式 
function Q4($arr){
    //氣泡排序法
    for ($i=0;$i<count($arr);$i++) { 
      for ($j=0;$j<count($arr)-1;$j++) { 
          if ($arr[$j]>$arr[$j+1]) { 
            $tmp=$arr[$j+1]; 
            $arr[$j+1]=$arr[$j]; 
            $arr[$j]=$tmp; 
          } 
      } 
    }
    echo "資料排序-正序:".implode(",",$arr); 
    echo "</br>";    
}
$arr=array(77,5,5,22,13,55,97,4,796,1,0,9);
Q4($arr);
?>