<?php

$a = ["Hellooooo", "World", "in", "a", "frame"];

function printT( $arr ) {

	$maxLength = 0;

	foreach ($arr as $row) {
		$maxLength = max($maxLength, strlen($row));
	}

// $$maxLength+4 for adding 4 stars
	echo str_repeat("*", $maxLength+4);
	echo "\n";

	foreach ($arr as $row) {

		echo "* ";
		echo $row;

		if($maxLength - count($row)){
			echo str_repeat(" ", $maxLength - strlen($row));
		}

		echo " *\n";
	}

	echo str_repeat("*", $maxLength+4);
	echo "\n";
}


echo "<pre>\n";
printT($a);
echo "\n</pre>";
?>
