<?php
ini_set('display_errors', 1);
function findpair($A, $sum)
{
    // consider each element except last element
    for ($i = 0; $i < count($A) - 1; $i++) {
        // start from i'th element till last element
        for ($j = $i + 1; $j < count($A); $j++) {
            // if desired sum is found, print it and return
            if ($A[$i] + $A[$j] == $sum) {
                print_r('pair found at index ' . $i . ' and ' . $j);
                return;
            }
        }
    }

    printf('pair not found');
}


function findSumZero($arrayName)
{

    for ($i = 0; $i < count($arrayName); $i++) {
        $sum = 0;
        // start from i'th element till last element
        for ($j = $i; $j < count($arrayName); $j++) {

            $sum += $arrayName[$j];

            if ($sum == 0) {
                print_r("Subarray [" . $i . ".." . $j . "]");
            }

        }

    }
}

function sortBinaryArray($array)
{
    $zeros = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == 0) {
            $zeros++;
        }
    }

//put zeros in the begining

    $k = 0;

    while ($zeros-- != 0) {
        $array[$k++] = 0;
    }

//fill all remaining elemnt with 1

    while ($k < count($array)) {
        $array[$k++] = 1;
    }

}


// in place merge two sorted arrays

function merege($x, $y)
{

    $countX = count($x);
    $countY = count($y);

    for ($i = 0; $i < $countX; $i++) {
        if ($x[$i] > $y[0]) {

            //swap x[i] with y[0]

            $temp = $x[$i];
            $x[$i] = $y[0];
            $y[0] = $temp;

            $first = $y[0];

            for ($k = 1; $k < $countY && $y[$k] < $first; $k++) {
                $y[$k - 1] = $y[$k];
            }

            $y[$k - 1] = $first;

        }
    }

    echo implode(',', $x);
    echo "<br>";
    echo implode(',', $y);
}

$z = [8, -4, -4, 2, 2, 2];
$f = [-5, 8, 4, 2, 4, -3, 10];
$r = [0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1];
$sum = 4;
findpair($z, $sum);
echo "<br>";
findSumZero($r);
echo "<br>";
sortBinaryArray($f);
merege($z, $f);

?>
