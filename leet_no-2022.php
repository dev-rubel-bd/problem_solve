<?php
    function construct2DArray($original, $m, $n) {
        if(count($original)>=$n){
            $x=array_chunk($original,$n);
        if(count($x)==$m){
            return $x;
        }
        else{
            return $x=[];
        }
        
        }
        else{
            return $x=[];
        }
    }
    ?>