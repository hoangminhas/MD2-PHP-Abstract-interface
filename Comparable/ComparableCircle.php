<?php
include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{
    function compareTo($objTwo)
    {
        $objTwoRadius = $objTwo->getRadius();   // TODO: Implement compareTo() method.
        if ($this->getRadius() > $objTwoRadius) {
            return 1;
        } elseif ($this->getRadius() < $objTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}