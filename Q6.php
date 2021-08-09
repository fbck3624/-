<?php
// •給定一個整數陣列 nums 和一個整數 target ,當兩數總和為target時,返回兩數的索引。 
// •您可以假設每個輸入都只有一個解決方案,並且您可能不會兩次使用相同的元素。 
// •您可以按任何順序返回答案。 
// 限制條件: 
// 2 <= nums.length <= 103 
// -109 <= nums[j] <= 109 
// -109 <= target <= 109 o 
// 僅存在一個有效答案。

// 範例1: 
// 輸入: nums = [2,7,11,15],target = 9 輸出:[0,1] 輸出:因為nums [a] + nums [1] == 9.所以我們返回 [,1]。 
// 範例2: 
// 輸入: nums = [3,2,4],target = 6 輸出:[1,2] 
// 範例3: 
// 輸入: nums = [3,3],target = 6 輸出:[0,1] 
// 函式示意 
// /** 
// * @param Integer[] $nums * @param Integer $target * @return Integer[] 
// *|| 
// function twoSum($nums, $target){ 
// 實作內容 
// return 輸出陣列; 
// }
function twoSum($nums, $target) {
    $result=array();
    $finish=false;
    if(count($nums)<2 || count($nums)>103){
        die("</br>陣列長度需介於2到103之間");
    }
    for($i = 0; $i < count($nums); $i++){
        if($nums[$i]<-109 || $nums[$i]>109){
            die("</br>nums的值須介於-109到109之間");
        }
    }
    if($target<-109 || $target>109){
        die("</br>target的值須介於-109到109之間");
    }
    for($i = 0; $i < count($nums); $i++) {
       // $first=$nums[$i];
        for($j = 0; $j < count($nums); $j++) {
            if($i!=$j) {
                if(($nums[$i]+$nums[$j])==$target){
                    array_push($result,$i,$j);
                    $finish=true;
                }
            }
        }  
        if($finish==true){
            break;
        }      
    }
    if($finish==false){
        echo "此陣列無數值相加可等於target";
    }
    echo "</br>";  
    return $result;
}
//test
$nums = [2,7,11,15];
$target = 9;
echo implode(",",twoSum($nums,$target));
$nums = [3,2,4];
$target = 6;
echo implode(",",twoSum($nums,$target));
$nums = [3,3];
$target = 6;
echo implode(",",twoSum($nums,$target));
$nums = [122,0];
$target = 6;
echo implode(",",twoSum($nums,$target));
?>