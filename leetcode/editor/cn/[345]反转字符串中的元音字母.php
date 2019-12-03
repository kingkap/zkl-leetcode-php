<?php
//编写一个函数，以字符串作为输入，反转该字符串中的元音字母。 
//
// 示例 1: 
//
// 输入: "hello"
//输出: "holle"
// 
//
// 示例 2: 
//
// 输入: "leetcode"
//输出: "leotcede" 
//
// 说明: 
//元音字母不包含字母"y"。 
// Related Topics 双指针 字符串



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $reason = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $words = str_split($s);
        $len = count($words);
        $j = $len-1;

        foreach ($words as $k => $word)
        {
            if(in_array($word, $reason))
            {
                for (;$j>=$k;$j--)
                {
                    if(in_array($words[$j], $reason))
                    {
                        $tmp = $words[$k];
                        $words[$k] = $words[$j];
                        $words[$j] = $tmp;
                        $j--;
                       break;
                    }
                }

            }
        }

        return implode($words);
    }
}
//leetcode submit region end(Prohibit modification and deletion)


var_dump((new Solution)->reverseVowels('leetcodeadasdasaxasxaz'));
