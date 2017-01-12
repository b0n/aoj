<?php

// ax + by = c
// dx + ey = f

function x($a, $b, $c, $y) {
	return ($c - ($b * $y)) / $a;
}

function y($a, $b, $c, $d, $e, $f) {
	return (($c * $d) - ($a * $f)) / (($b * $d) - ($a * $e));
}

for (;fscanf(STDIN,"%d %d %d %d %d %d",$a,$b,$c,$d,$e,$f);) {
	$y = y($a, $b, $c, $d, $e, $f);
	$x = x($a, $b, $c, $y);
	printf("%.03f %.03f" . PHP_EOL, $x, $y);
}
