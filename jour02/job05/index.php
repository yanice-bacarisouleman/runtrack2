<?php
$a = 1 ;
$b = 0;
$c = 1;
for($a=0;$a<1000;$a++) {
    $b = 0;
    for($c=1;$c<=$a;$c++) {
        if($a%$c==0){
            $b++;
        }
    }
    if ($b == 2)
        echo $a.'<br/>';
}