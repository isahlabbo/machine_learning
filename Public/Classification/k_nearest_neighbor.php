<?php

use Phpml\Classification\KNearestNeighbors;
use Phpml\SupportVectorMachine\Minkowski;

//this classifier implement knearest algorithm
//$k is the number of nearest neighbor
//$lamda is distance between them

$classifier = new KNearestNeighbors($k=4);

$classifier = new KNearestNeighbors($k=3, new Minkowski($lambda=4));

$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];

$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new KNearestNeighbors();

$classifier->train($samples, $labels);

//to predict new example 

$classifier->predict([3, 2]);
// return 'b'

$classifier->predict([[3, 2], [1, 5]]);
// return ['b', 'a']