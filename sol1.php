<?php
/**
 * Created by PhpStorm.
 * User: assem
 * Date: 11/27/18
 * Time: 9:36 PM
 */


$arr = [ 1, 2, 3, 4, 2, 6, 7, 8 ];

function rotate( &$arr, $k ) {

	$len = count( $arr );

	for ( $i = 0; $i < $len; $i ++ ) {
		if ( $k == $arr[ $i ] ) {
			for ( $j = $len - 1; $j > $i; $j -- ) {
				for ( $w = $len - 1; $w > 0; $w -- ) {

					$temp          = $arr[ $w - 1 ];
					$arr[ $w - 1 ] = $arr[ $w ];
					$arr[ $w ]     = $temp;
				}
			}
		}
	}

}

rotate($arr, 7);
echo "<pre>";print_r($arr);

?>
