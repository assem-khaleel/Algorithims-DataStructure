<?php

function sockMerchant($n, $ar) {
    // Write your code here
die('assem');
    
    $pairs=0;
$ar[] = [5,4,5,4,6,9,1,1]; 
    $unique_color_arr = array_unique($ar);
print_r( $unique_color_arr);
     $counts = array_count_values($ar);
    foreach($unique_color_arr as $color )
    {
        $count_color = $counts[$color];
        if($count_color > 1)
        $pairs += floor($count_color / 2);
    }
    
    return $pairs;
    
}


