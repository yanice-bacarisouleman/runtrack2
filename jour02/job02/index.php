<?php
$a = 0;
$b = 1337;

while($a < $b ){
    $a++;
    if($a == 26 || $a == 37 || $a == 88 || $a == 1111 || $a == 3233 ){
        $a++;
    }
    echo $a."<br>";

}

?>
