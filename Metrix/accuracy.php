<?php

//this Class for calculate classifier accuracy.

//To calculate classifier accuracy score use score static method. Parameters:

//example

$actualLabels = ['a', 'b', 'a', 'b'];
$predictedLabels = ['a', 'a', 'a', 'b'];

Accuracy::score($actualLabels, $predictedLabels);
// return 0.75

Accuracy::score($actualLabels, $predictedLabels, false);
// return 3