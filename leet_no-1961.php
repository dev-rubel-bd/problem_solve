<?php
 function isPrefixString($s, $words) {
    $prefix = "";
    foreach ($words as $word) {
        $prefix .= $word;
        if ($prefix === $s) { 
            return true;
        }
    }
    return false;
}

