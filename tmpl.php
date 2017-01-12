<?php
while( TRUE ) {
    fscanf(STDIN, "%d", $a);
    if( feof(STDIN) )
        break;
    $c[] = $a;
}
rsort($c, SORT_NUMERIC);
foreach(array_slice($c, 0, 3) as $d) {
    echo $d, PHP_EOL;
}
