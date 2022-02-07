<?php
// function for kadane's algorithm
function kadane($Array) {
  $max_sum = 0;
  $current_sum = 0;
  for($i=0; $i<count($Array); $i++) {
    $current_sum = $current_sum + $Array[$i];
    
    if ($current_sum < 0)
      $current_sum = 0; 
    
    if($max_sum < $current_sum)
      $max_sum = $current_sum; 
  }
  return $max_sum;
}

// test the code
$MyArray = array(-3, 1, -8, 12, 0, -3, 5, 15, 4);
echo "Maximum SubArray is: ".kadane($MyArray);

// The COMPLEXITY is O(N)
?>