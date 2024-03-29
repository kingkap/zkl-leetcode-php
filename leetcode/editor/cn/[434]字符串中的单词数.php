<?php
//统计字符串中的单词个数，这里的单词指的是连续的不是空格的字符。 
//
// 请注意，你可以假定字符串里不包括任何不可打印的字符。 
//
// 示例: 
//
// 输入: "Hello, my name is John"
//输出: 5
// 
// Related Topics 字符串



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        $words = array_filter(explode(' ', $s));
        return count($words);
    }
}
//leetcode submit region end(Prohibit modification and deletion)


var_dump((new Solution)->countSegments('j, m i  s'));