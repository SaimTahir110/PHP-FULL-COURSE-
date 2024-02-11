
<?php
$x = 10;
$y = 19;

function test (){
global $x, $y;
$x = $x + $y;

}

test();
echo $x; //prints 29


?>