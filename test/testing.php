<?php
    
    function test($function) {
        /*
            Including Test Cases:
            
            [
                case1: [Input1, Input2, Expected Result],
                case2: [Input1, Input2, Expected Result],
                .... And So On.
            ]
        */
        $tests = [
            [4, 7, 2],
            [4, 9, 3],
            [1, 1, 1]
        ];
        
        // start a case counter
        $i = 1;
        foreach($tests as $test) {
            $re = $function($test[0], $test[1]);
            
            if ($re == $test[2]) {
            
                echo ' Case #' . $i . " Is True <br/> \n";
            }else {
     
                echo ' Case #' . $i . " Is False <br/> \n";
            }

            // increse counter       
            $i++;
        }
    }