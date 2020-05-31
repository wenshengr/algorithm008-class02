<?php
/**
 * @filename minimum-path-sum.php
 * @desc this is file description
 * @date 2020/5/29 23:03
 * @author: wsr
 */

/**
 * 最小路径求和
 * @param $grid
 * @return mixed
 */

function minPathSum($grid) {
    $m = count($grid);
    $n = count($grid[0]);

    if ($n <1 || $m <1) {
        return $grid;
    }

    $dp = $grid;
    for($i=1;$i<$m;$i++) {
        $dp[$i][0] += $dp[$i-1][0];
    }
    for($i=1;$i<$n;$i++) {
        $dp[0][$i] += $dp[0][$i-1];
    }
    for($i=1;$i<$m;$i++){
        for($j=1;$j<$n;$j++){
            $dp[$i][$j] = min($dp[$i-1][$j],$dp[$i][$j-1])+$grid[$i][$j];
        }
    }
    return $dp[$m-1][$n-1];
}
