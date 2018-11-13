<?php

//Selected algorithms require the use of a function for calculating the distance.

/*
Class for calculation Euclidean distance.

euclidean


To calculate Euclidean distance:
*/

$a = [4, 6];
$b = [2, 5];

$euclidean = new Euclidean();
$euclidean->distance($a, $b);
// return 2.2360679774998

//To calculate Manhattan distance:

$a = [4, 6];
$b = [2, 5];

$manhattan = new Manhattan();
$manhattan->distance($a, $b);
// return 3

/*
Chebyshev

Class for calculation Chebyshev distance.
*/

$a = [4, 6];
$b = [2, 5];

$chebyshev = new Chebyshev();
$chebyshev->distance($a, $b);
// return 2

/*
Minkowski

Class for calculation Minkowski distance.
*/

$a = [4, 6];
$b = [2, 5];

$minkowski = new Minkowski();
$minkowski->distance($a, $b);
// return 2.080

//You can provide the lambda parameter:

$a = [6, 10, 3];
$b = [2, 5, 5];

$minkowski = new Minkowski($lambda = 5);
$minkowski->distance($a, $b);
// return 5.300

/*
Custom distance

To apply your own function of distance use Distance interface. Example
*/

class CustomDistance implements Distance
{
    /**
     * @param array $a
     * @param array $b
     *
     * @return float
     */
    public function distance(array $a, array $b) : float
    {
        $distance = [];
        $count = count($a);

        for ($i = 0; $i < $count; ++$i) {
            $distance[] = $a[$i] * $b[$i];
        }

        return min($distance);    
    }
}




