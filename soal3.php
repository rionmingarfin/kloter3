<?php
function cetak($a){
    $i=0;
    $acak="01234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    while ($i <= $a) {
        $t=substr(str_shuffle($acak),0,32);
        if ($t) {     
            echo $t;
            echo "</br>";
        }else{
            return false;
        }
        $i++;
    }
}

echo cetak(2);