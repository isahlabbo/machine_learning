<?php

//cunstructor parameter

/*
    $clustersNumber - number of clusters to find
    $initialization - initialization method, default kmeans++ (see below)
*/
/*

To divide the samples into clusters simply use cluster method. 
It's return the array of clusters with samples inside.

*/

$samples = [[1, 1], [8, 7], [1, 2], [7, 8], [2, 1], [8, 9]];

/*
Or if you need to keep your indentifiers along with yours samples you can use 
array keys as labels.
*/
$samples = [ 'Label1' => [1, 1], 'Label2' => [8, 7], 'Label3' => [1, 2]];

$kmeans = new KMeans(2);

$kmeans->cluster($samples);

/* 
return [0=>[[1, 1], ...], 1=>[[8, 7], ...]] or [0=>['Label1' => [1, 1], 
'Label3' => [1, 2], ...], 1=>['Label2' => [8, 7], ...]]
*/

/*

kmeans++ (default)

K-means++ method selects initial cluster centers for k-mean clustering in a smart way to speed up convergence. It use the DASV seeding method consists of finding good initial centroids for the clusters.
random

Random initialization method chooses completely random centroid. It get the space boundaries to avoid placing clusters centroid too far from samples data.

*/