<?php
/**
 * @filename jie-fa-by-zzpwestlife.php
 * @desc this is file description
 * @date 2020/5/14 22:50
 * @author: wsr
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        // 最远可以到达的位置
        $reach = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($i > $reach) return false;
            $reach = max($reach, $i + $nums[$i]);
        }
        return true;
    }
}