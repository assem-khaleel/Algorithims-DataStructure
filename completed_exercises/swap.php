<?php
function swap($x, $y) {
  echo "Before Swap.\r\n";
  echo "x = $x \r\n";
  echo "y = $y \r\n";

  //Swap technique
  $x = $x + $y;
  $y = $x - $y;
  $x = $x - $y;

  echo "After Swap.\r\n";
  echo "x = $x \r\n";
  echo "y = $y \r\n";
}

swap(5,100);
?>
