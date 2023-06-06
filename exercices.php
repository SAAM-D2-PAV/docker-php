<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s): int
    {

        $symbols = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];


        // Constraints:
        // 1 <= s.length <= 15
        if ( strlen($s) <= 1 || strlen($s) >= 15) {
           throw new Exception("Entrée non conforme");
           
        }
        
        // s contains only the characters ('I', 'V', 'X', 'L', 'C', 'D', 'M').
        // It is guaranteed that s is a valid roman numeral in the range [1, 3999].

        // I can be placed before V (5) and X (10) to make 4 and 9. 
        // X can be placed before L (50) and C (100) to make 40 and 90. 
        // C can be placed before D (500) and M (1000) to make 400 and 900.

        return strlen($s);
    }

}

$test = new Solution();

print $test->romanToInt('');
