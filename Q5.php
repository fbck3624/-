<?php
// 今有二陣列,請寫出資料處理程式碼 
// 陣列a:775,5,22,13,55,974,796,1,09 
// 陣列b:0.1,2,3,4,5,6,7,8,9 
// 1. 陣列c = 陣列a交集陣列b 
// 2. 陣列d = 陣列a 差集陣列b 
// 3. 陣列e = 陣列a聯集陣列b 
// 本題需自行完成演算法,不可使用現成交集/差集/聯集函式 
function Q5($a,$b){
    $c=array();
    $d=array();
    $e=array();
    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($b);$j++){
            if($a[$i]==$b[$j]){
                array_push($c,$a[$i]);
            }
        }
    }
    $c=array_flip(array_flip($c));
    echo "交集:".implode(",",$c);
    // $result = array_intersect ($a, $b);
    // echo "交集:".implode(",",$result);
    echo "</br>";
    $d=$a;
    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($b);$j++){
            if($a[$i]==$b[$j]){
                $key=array_search($a[$i],$d);
                unset($d[$key]);
            }
        }
    }
    echo "差集:".implode(",",$d);
    echo "</br>";  
    // $result = array_diff ($a, $b);
    // echo "差集:".implode(",",$result);
    $e=$a;
    for($j=0;$j<count($b);$j++){
        array_push($e,$b[$j]);
    }
    $e=array_flip(array_flip($e));
    echo "聯集:".implode(",",$e);
    echo "</br>";  
    // $result = array_unique(array_merge($a,$b));
    // echo "聯集:".implode(",",$result);
}
$a=array(77,5,5,22,13,55,97,4,796,1,0,9);
$b=array(0,1,2,3,4,5,6,7,8,9);
Q5($a,$b);
?>