<?php
//给定两个字符串 s 和 t，判断它们是否是同构的。 
//
// 如果 s 中的字符可以被替换得到 t ，那么这两个字符串是同构的。 
//
// 所有出现的字符都必须用另一个字符替换，同时保留字符的顺序。两个字符不能映射到同一个字符上，但字符可以映射自己本身。 
//
// 示例 1: 
//
// 输入: s = "egg", t = "add"
//输出: true
// 
//
// 示例 2: 
//
// 输入: s = "foo", t = "bar"
//输出: false 
//
// 示例 3: 
//
// 输入: s = "paper", t = "title"
//输出: true 
//
// 说明: 
//你可以假设 s 和 t 具有相同的长度。 
// Related Topics 哈希表



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $s = str_split($s);
        $t = str_split($t);

        $hash_s = [];
        $hash_t = [];

        foreach ($s as $k => $value){
            if(array_key_exists($value, $hash_s))
            {
                $hash_s[$value]++;
            }
            else
            {
                $hash_s[$value] = 1;
            }

            if(array_key_exists($t[$k], $hash_t))
            {
                $hash_t[$t[$k]]++;
            }
            else
            {
                $hash_t[$t[$k]] = 1;
            }
        }

        sort($hash_s);
        sort($hash_t);


        foreach ($hash_s as $k=> $count){
            if($hash_t[$k] != $count){
                return false;
            }
        }

        return true;
    }
}
//leetcode submit region end(Prohibit modification and deletion)


var_dump((new Solution)->isIsomorphic("aba", "baa"));