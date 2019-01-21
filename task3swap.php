<?php
	
	$x = 20;
	$y = 40;

	//before swaping
	echo "Before Swap: ".$x." ".$y."<br>";

	list($x,$y) = array($y,$x);

	echo "After Swap: ".$x." ".$y;
?>