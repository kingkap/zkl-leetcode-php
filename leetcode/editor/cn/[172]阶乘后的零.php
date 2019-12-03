<?php
//给定一个整数 n，返回 n! 结果尾数中零的数量。 
//
// 示例 1: 
//
// 输入: 3
//输出: 0
//解释: 3! = 6, 尾数中没有零。 
//
// 示例 2: 
//
// 输入: 5
//输出: 1
//解释: 5! = 120, 尾数中有 1 个零. 
//
// 说明: 你算法的时间复杂度应为 O(log n) 。 
// Related Topics 数学



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function trailingZeroes($n) {
        $res = 0;
        while($n)
        {
            $res += (int)($n / 5);
            $n =  (int)($n / 5);
        }

        return $res;
    }
}
//leetcode submit region end(Prohibit modification and deletion)


echo (new Solution)->trailingZeroes(100000);