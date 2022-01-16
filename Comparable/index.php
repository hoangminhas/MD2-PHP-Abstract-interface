<?php
include "ComparableCircle.php";

$circle1 = new ComparableCircle(5, 'circle1');
$circle2 = new ComparableCircle(25, 'circle2');
$circle3 = new ComparableCircle(15, 'circle3');

$check = $circle1->compareTo($circle3);
echo $check;