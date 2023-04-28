<?php
function fibonacci($n){
    if($n == 0){
        $fib = array();
    } else if ($n == 1) {
        $fib = array(0);
    } else {
        $fib = array(0, 1);
        for($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
    }
    return $fib;
}

    echo implode(", ", fibonacci(4));
    echo "<br>";
    echo implode(", ", fibonacci(5));
    echo "<br>";
    echo implode(", ", fibonacci(8));
    echo "<br>";
    echo implode(", ", fibonacci(1));
    echo "<br>";
    echo implode(", ", fibonacci(3));
    echo implode(", ", fibonacci(10));

?>
