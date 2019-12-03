<?php
//给定一个单词列表，只返回可以使用在键盘同一行的字母打印出来的单词。键盘如下图所示。 
//
// 
//
// 
//
// 
//
// 示例： 
//
// 输入: ["Hello", "Alaska", "Dad", "Peace"]
//输出: ["Alaska", "Dad"]
// 
//
// 
//
// 注意： 
//
// 
// 你可以重复使用键盘上同一字符。 
// 你可以假设输入的字符串将只包含字母。 
// Related Topics 哈希表



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $one = 'qwertyuiop';
        $two = 'asdfghjkl';
        $three = 'zxcvbnm';
        $res = [];
        foreach ($words as $word){
            $tmp = str_split($word);
            foreach ($tmp as $value){

            }
        }

    }
}
//leetcode submit region end(Prohibit modification and deletion)


var_dump((new Solution)->xxx());