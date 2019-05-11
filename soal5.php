<?php

function sort_array($data){
$arr=array();
foreach ($data as $dataMax) {
    $arr[]=max($dataMax);
}
return $arr;
}

$array=array(array("a","c","b","e","d"),array("g","e","f"));

$array2=array(array('g','h','x','j'),array("a","c","b","e","d"),array('q','w','a'));
print_r(sort_array($array2));

