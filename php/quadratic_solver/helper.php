<?php


function quadraticSolver($a, $b, $c){
    // Initiating delta with its actual value
    $delta = $b**2 - (4*$a*$c);

    $re = -$b/(2*$a);
    $im = sqrt(abs($delta))/(2*$a);

    // Instantiating variables
    $roots = [
        0,
        0
    ];

    // Dual Root
    if ($delta==0){
        $result  = -$b/(2*$a);
        $roots = [
            $re,
            $re,
        ];
    }

    // Real Root
    if ($delta>0){
        $roots = [
            $re+$im,
            $re-$im,
        ];
    }

    // Imaginary Root
    if ($delta<0){
        $roots = [
            $re . " + " . $im . " i",
            $re . " - " . $im . " i",
        ];
    }

    return $roots;
}


function incrementerTest($a){
    $a = $a + 10;

    return $a;

}

?>