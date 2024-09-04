<?php
$teks = "Selamat Ulang Tahun Yang Ke 17!"; 

//preg_ replace untuk mencari pola dalam sebuah string menggunakan ekspresi reguler (regular expression) dan menggantinya dengan string yang ditentukan.
$number = preg_replace('/[^0-9]/', '', $teks);

echo $teks;
echo "<br>";

//str_split untuk membagi sebuah string menjadi array, 
if ($number){
    $arrNumber =str_split($number, 2);
    echo "Teks mengandung angka :" . implode (', ' , $arrNumber);
}else {
    echo "Teks tidak mengandung angka.";
}
?>