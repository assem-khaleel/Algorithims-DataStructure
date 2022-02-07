<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$a= [1,10,9,3,8,6,3,5,12];
function mergeSort($arr){

    $len = sizeof($arr);
    echo($len);
   if($len <2) {
       print_r($arr) ;
   }

       $mid = floor($len/2);
       $left = array_slice($arr,$mid);
       $right =array_slice($arr,$mid);
   //send left and right to the mergeSort to broke it down into pieces
   //then merge those
   return array_merge(mergeSort($left),mergeSort($right));
}
echo "<pre>\n";
mergeSort($a);
echo "\n</pre>";
?>
