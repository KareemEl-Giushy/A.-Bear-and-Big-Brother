<?php

    function limak($a = 0, $b = 0) {

        // init counter
        $count = 0;

        while($a <= $b) {
            // Double And Triple
            $a *= 3;
            $b *= 2;
            // Increase Counter
            $count++;
        }

        // Print Years

        echo $count;   
    
    
    /*
        // onother solution 
        for($i = 1;;$i++) {
            $a *= 3;
            $b *= 2;
            if($a > $b)
                break;
        
        }
        
        echo $i;
        
    */
    }

    limak(4, 7);