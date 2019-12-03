<?php
//给定两个二进制字符串，返回他们的和（用二进制表示）。 
//
// 输入为非空字符串且只包含数字 1 和 0。 
//
// 示例 1: 
//
// 输入: a = "11", b = "1"
//输出: "100" 
//
// 示例 2: 
//
// 输入: a = "1010", b = "1011"
//输出: "10101" 
// Related Topics 数学 字符串



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $long = '';
        $short = '';
        if(strlen($a) > strlen($b)){
            $long = array_reverse(str_split($a));
            $short =array_reverse(str_split($b));
        } else {
            $long = array_reverse(str_split($b));
            $short = array_reverse(str_split($a));
        }

        $res = [];
        $add = 0;
        foreach ($long as $k => $value){
            if(!array_key_exists($k, $short))
            {
                $short[$k] = 0;
            }

            if($value + $short[$k] + $add >= 2)
            {
                $res[] = ($value + $short[$k] + $add) % 2;
                $add = 1;
            }
            else
            {
                $res[] = ($value + $short[$k] + $add);
                $add = 0;
            }
        }
        if($add == 1)
        {
            $res[] = 1;
        }

        return implode(array_reverse($res));
    }
}
//leetcode submit region end(Prohibit modification and deletion)


var_dump((new Solution)->addBinary('11', '1'));