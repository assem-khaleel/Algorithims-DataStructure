<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function chunk($arr[],intval($size)){
print_r (array_chunk($arr[],intval($size)));
}
$arr[] = ['1','5','7','8','46','34','6'];
 chunk($arr[],2);
?> 

