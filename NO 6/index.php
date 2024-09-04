<?php
    $student = [
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],
    ];

    //foreach untuk mengulang setiap item dalam sebuah daftar atau kelompok data
    foreach ($student as $s) {
        
        $nilai = implode($s['nilai']);


        //array_sum menjumlahkan semua nilai yang ada dalam sebuah array
        $rataRata = array_sum($s['nilai']) / count($s['nilai']);

        echo '<ul>';
        echo '<tr>';
        echo '<td>' . ($s['nama']) . '</td>';
        echo ' = ';
        echo '<td>' . number_format($rataRata, 1) . '</td>';
        echo '</tr>';
        echo '</ul>';
    }
    ?>
