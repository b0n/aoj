<?php
//$t = trim(fgets(STDIN));
//fscanf(STDIN, "%d", $a);
//echo $a * $a * $a;

while(true) {
    fscanf(STDIN, "%d", $s);
    if(feof(STDIN))
        break;
	$h = $s / 3600;
	$m = ($s % 3600) / 60;
	$s = ($s % 3600) % 60;
    printf("%d:%d:%d", $h, $m, $s);
	echo PHP_EOL;
}
