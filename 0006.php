<?php
echo strrev(trim(fgets(STDIN))), PHP_EOL;
/*
for($i=(strlen($a)-1);$i>-1;$i--){
	print substr($a, $i, 1);
}
//echo PHP_EOL;
*/
/*
for(;fscanf(STDIN,"%s",$a);) {
	echo $a, PHP_EOL;
	echo implode('',array_reverse(str_split($a))), PHP_EOL;
	$b = '';
	for($i=0;$i<strlen($a);$i++){
		$b = substr($a, $i, 1) . $b;
	}
	echo $b, PHP_EOL;
}
*/
