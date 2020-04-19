<?php
/**
 * @filename trapping-rain-water.php
 * @desc this is file description
 * @date 2020/4/19 13:05
 * @author: wsr
 */
class Solution {
    /**
     * 根据双指针法
     * @param $height
     * @return int|mixed
     */
    function trap($height){
        $max_val = 0;
        $max_index = 0;
        for($i=0; $i<count($height); $i++) {
            if ($height[$i] > $max_val) {
              $max_val = $height[$i];
              $max_index = $i;
            }
        }

        // 左边到最大高度
        $left_height = $height[0];
        $area = 0;
        for ($i = 0; $i < $max_index; $i++) {
            if ($left_height < $height[$i]) {
                $left_height = $height[$i];
            } else {
                $area += $left_height - $height[$i];
            }
        }

        // 右边到最大高度
        $right_height = $height[count($height)-1];
        for ($i = count($height)-1; $i > $max_index; $i--) {
            if ($right_height < $height[$i]) {
                $right_height = $height[$i];
            } else {
                $area += $right_height - $height[$i];
            }
        }
        return $area;

    }

    /**
     * 【未测试-待优化】
     * 根据栈：比栈顶元素小就入栈，如果下一个元素比栈顶元素大，则该部分就是凹槽，即计算面积
     * @param $height
     * @return int|mixed
     */
    function trap_stack($height){
//        $stack = new SplStack();
//        $res = 0;
//        for($i=0; $i<count($height); $i++) {
//            if ($stack->isEmpty() || $height[$i] < $height[$stack->top()]) {
//                $stack->push($i);
//            } else {
//                while (!$stack->isEmpty() && $height[$i] > $height[$stack->top()]) {
//                    $top = $stack->top();
//                    if (!$stack->isEmpty()) {
//                        $width = $i - $stack->top();
//                        $height_new =  min($height[$i], $height[$stack->top()]) - $height[$top];
//                        $res += $width * $height_new;
//                    }
//                }
//                $stack->push($i);
//            }
//        }
//
//        return $res;

    }
}

$obj = new Solution();
$arr = [0,1,0,2,1,0,1,3,2,1,2,1];
$result = $obj->trap_stack($arr);
print_r($result);