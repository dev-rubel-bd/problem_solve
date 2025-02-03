<?php


    function numOfStrings($patterns, $word) {
        $count = 0;
        
        foreach ($patterns as $pattern) {
            if (strpos($word, $pattern) !== false) {
                $count++;
            }
        }
        
        return $count;
    }

$patterns = ["a","abc","bc","d"];
$word = "abc";
print_r(numOfStrings($patterns, $word));