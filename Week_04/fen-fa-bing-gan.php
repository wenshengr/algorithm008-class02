<?php
/**
 * @filename fen-fa-bing-gan.php
 * @desc this is file description
 * @date 2020/5/15 22:41
 * @author: wsr
 */
class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        $m = 0;
        $n = 0;
        sort($g);
        sort($s);

        $g_count = count($g);
        $s_count = count($s);

        while ($m < $g_count && $n < count($s_count)) {
            if ($g[$m] < $s[$n]) {
                $m ++;
            }

            $n++;
        }

        return $m;
    }
}
