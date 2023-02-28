<?php
for($a = 1; $a <= 12; $a++){
    echo $a. " = ". date('F', mktime(0,0,0,$a,0,1)); //mktime(jam,menit,detik,bulan,hari,tahun)
    echo "<br>";
}
?>