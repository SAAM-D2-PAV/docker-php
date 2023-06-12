<?php

// Given an array of integers nums and an integer target :
// Input: nums = [2,7,11,15], target = 9

// return indices of the two numbers such that they add up to target.
// Output: [0,1]
// Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

// You may assume that each input would have exactly one solution, and you may not use the same element twice.
// You can return the answer in any order




class Solution0 {

    function twoSum($nums, $target) {
        $numMap = [];  // Tableau associatif pour stocker le complément de chaque nombre
        
        foreach ($nums as $index => $num) {
            $complement = $target - $num;
           
            var_dump($complement);

            if (array_key_exists($complement, $numMap)) {
                return [$numMap[$complement], $index];
            }
            $numMap[$num] = $index;
        }
        
        return [];  // Aucune solution trouvée
    }
    
   
    
}
//$sol = new Solution();
//print_r($sol->twoSum([2, 7, 11, 15], 9));  // Output: [0, 1]
//print_r($sol->twoSum([3, 2, 4], 6));       // Output: [1, 2]
//print_r($sol->twoSum([3, 3], 6));          // Output: [0, 1]


//https://leetcode.com/problems/palindrome-number/
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

//print_r($input);
//print_r($reversed);
//print_r($preserved);

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {

        if (!is_int($x) || $x < 0) {
            throw new Exception("Erreur de saisie", 1);
        }
       
        
        $array = str_split($x);
        $counter = count($array);

        

    
        $first_part_array_slice = array_slice($array,0,$counter/2);
        $second_part_array_split_and_reverse = array_reverse(array_slice($array, $counter/2));


        return  $first_part_array_slice;
        //return  $second_part_array_split_and_reverse;
    }
}

$test = new Solution();
print_r($test->isPalindrome(121));