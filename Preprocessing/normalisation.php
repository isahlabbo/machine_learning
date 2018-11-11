<?php

/*
Normalization is the process of scaling individual samples to have unit norm.
L2 norm
*/

//example

use Phpml\Preprocessing\Normalizer;

$samples = [
    [1, -1, 2],
    [2, 0, 0],
    [0, 1, -1],
];

//l2 norm

$normalizer = new Normalizer();
$normalizer->preprocess($samples);

/*
$samples = [
  [0.4, -0.4, 0.81],
  [1.0, 0.0, 0.0],
  [0.0, 0.7, -0.7],
];
*/

$samples = [
    [1, -1, 2],
    [2, 0, 0],
    [0, 1, -1],
];

//l1 norm

$normalizer = new Normalizer(Normalizer::NORM_L1);
$normalizer->preprocess($samples);

/*
$samples = [
   [0.25, -0.25, 0.5],
   [1.0, 0.0, 0.0],
   [0.0, 0.5, -0.5],
];
*/
