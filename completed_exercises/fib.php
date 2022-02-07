<?php

// Fibonacci Sequence

function fib($n) {
  $y = ($n == 0)? 0 : (($n == 1) ? 1 : fib($n-1) + fib($n-2));
  return $y;
}

echo "Fibonacci 8th term: ".fib(8)."<br>";
echo "Fibonacci 9th term: ".fib(9)."<br>";
echo "Fibonacci 10th term: ".fib(10)."<br>"; 
?>