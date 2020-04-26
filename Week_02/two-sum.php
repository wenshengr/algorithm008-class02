<?php
/**
 * @filename two-sum.php
 * @desc this is file description
 * @date 2020/4/25 22:48
 * @author: wsr
 */
/**
 * @param Integer[] $numbers
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($numbers, $target) {
    for ($i = 0; $i< count($numbers); $i++) {
        for ($j = $i+1; $j< count($numbers); $j++) {
            if (($numbers[$i] + $numbers[$j]) == $target) {
                return [$i, $j];
            }
        }
    }
}

function twoSum2($numbers, $target) {
    foreach ($numbers as $key=>$val) {
        $other = $target - $val;
        if ($key != 0 && array_search($other, $numbers)){
            return [$key, array_search($other, $numbers)];
        }
    }

}

function twoSum3($nums, $target) {
    $arr = array();
    foreach($nums as $key=>$value){
        if(array_key_exists($target - $value, $arr)){
            return [$arr[$target - $value],$key];
        }
        $arr[$value] = $key;
    }
}

$nums = [2,6,7,9,10];


$result = twoSum([2,6,7,9,10], 9);
$result1 = twoSum2([3,3], 6);
$result2 = twoSum3([2,6,7,9,10], 9);
echo '<pre>';
//print_r($result);
print_R($result1);
//print_R($result2);