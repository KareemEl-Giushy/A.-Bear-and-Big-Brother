<?php
    // Including Testing Script  
    include_once 'test/testing.php';

    function limak($a = 0, $b = 0) {
        
        // init counter
        $count = 0;
        /*

        // onother solution 
        for($i = 1;;$i++) {
            $a *= 3;
            $b *= 2;
            if($a > $b){
                break;
            }
        
        }
        
        echo $i;
        return $i;
        
        */

        while($a <= $b) {
            // Double And Triple
            $a *= 3;
            $b *= 2;
            // Increase Counter
            $count++;
        }
        
        // Print Years

        echo $count;
        
        return $count; // For Testing
    }

// Testing
test('limak');