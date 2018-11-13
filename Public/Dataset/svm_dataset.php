<?php

//Helper class that loads data from SVM-Light format file. It extends the ArrayDataset.

/*
    Constructors Parameters

    $filepath - (string) path to the file

*/

use Phpml\Dataset\SvmDataset;

$dataset = new SvmDataset('dataset.svm');
