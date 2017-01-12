<?php
/**
 * ユークリッドの互除法
 * @see http://www.cwo.zaq.ne.jp/bfaby300/math/gojyo.html
 */
?>
<?php
for(;fscanf(STDIN,'%d %d', $a, $b);) {
	echo gcd($a,$b), ' ', lcm($a,$b), PHP_EOL;
}
function lcm($a, $b) {
	$g = gcd($a, $b);
	return $g * ($a/$g) * ($b/$g);
}
function gcd($a, $b) {
	//echo "$a $b", PHP_EOL;
	while(true) {
		$mod = $a % $b;
		//echo "m: $mod", PHP_EOL;
		if ($mod === 0) {
			$g = $b;
			break;
		}
		$a = $b;
		$b = $mod;
	}
	//echo $g, PHP_EOL;
	return $g;
}
