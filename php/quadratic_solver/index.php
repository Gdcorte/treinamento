<?php

require 'helper.php';


$result1 = quadraticSolver(1, 5, 6);
$result2 = quadraticSolver(1, -8, 16);
$result3 = quadraticSolver(1, 4, 5);


echo "<pre>";
echo json_encode($result1);
echo "<br>";
echo json_encode($result2);
echo "<br>";
echo json_encode($result3);
?>