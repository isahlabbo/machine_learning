<?php

/*Classifier based on applying Bayes' theorem with strong (naive) 
independence assumptions between the features.
*/

//to train the data

$samples = [[5, 1, 1], [1, 5, 1], [1, 1, 5]];
$labels = ['a', 'b', 'c'];

$classifier = new NaiveBayes();
$classifier->train($samples, $labels);

//to predict other example base on the trainig

$classifier->predict([3, 1, 1]);
// return 'a'

$classifier->predict([[3, 1, 1], [1, 4, 1]]);
// return ['a', 'b']