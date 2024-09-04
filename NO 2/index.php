<?php

$jamkerja = 10;
$kerjatambahan= 2;
$upahlembur = 50000;
$upahlanjutam= 25000;
$total= $upahlembur +($kerjatambahan * $upahlanjutam)-25000;

if($jamkerja > 8){
echo "Jam Kerja : " . $jamkerja;
echo "<br>";
echo "Jam Lebih : " . $kerjatambahan;
echo "<br>";
echo "Jumlah Kompensasi : RP.  " . $total;
} else{
    echo "Tidak Menambatkan Kompensasi";
}
?>