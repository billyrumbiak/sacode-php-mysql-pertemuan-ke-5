<?php
$data = [
    [
        "nama" => "Billy",
        "alamat" => "Kotaraja",
        "jk" => "L"
    ],
    [
        "nama" => "Axel",
        "alamat" => "Sentani",
        "jk" => "L"
    ],
    [
        "nama" => "Efati",
        "alamat" => "Waena",
        "jk" => "P"
    ],
    [
        "nama" => "Grace",
        "alamat" => "Sentani",
        "jk" => "P"
    ],
];

foreach($data as $peserta)
{
    echo $peserta['nama'] . "<br>";
    echo $peserta['alamat'] . "<br>";
    // Buat kondisi duluh setelah itu panggil di bawah
    if($peserta['jk'] === 'P') {
        $jk = 'Perempuan'; 
    }else{
        $jk = 'Laki-laki';
    };
    echo $jk . "<br>";
    echo "<br>";
}