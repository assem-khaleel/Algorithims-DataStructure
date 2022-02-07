<?php
// PHP program to rotate an array
// by d elements

/*Function to left Rotate arr[]
of size n by 1*/
function leftRotatebyOne(&$arr, $n)
{
    $initial_arr = $arr[0];
    for ($z = 0; $z < $n - 1; $z++)
        $arr[$z] = $arr[$z + 1];

    $arr[$z] = $initial_arr;
}

/*Function to left rotate arr[]
of size f by c*/
function leftRotate(&$arr, $c, $f)
{
    for ($i = 0; $i < $c; $i++)
        leftRotatebyOne($arr, $f);
}

/* utility function to print
an array */
function printArray(&$arr, $n)
{
    for ($i = 0; $i < $n; $i++)
        echo $arr[$i] . " ";
}

// Driver Code
$arr = array( 1, 2, 3, 4, 5, 6, 7 );
$n = sizeof($arr);

// Function calling
leftRotate($arr, 6, $n);
printArray($arr, $n);


?>
