<?php
for($a = 2; $a <= 13; $a++){
    $i = $a - 1;
    echo $i. " = ". date('F', mktime(0,0,0,$a,0,1)); //mktime(jam,menit,detik,bulan,hari,tahun)
    echo "<br>";
}
?>