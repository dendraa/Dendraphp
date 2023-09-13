<?php
// $mahasiswa = [
//     ["arif fandi", "098776786", "pandipramono@gmail", "teknik informatika"],
//     ["gianto jua", "094322486", "kaisentoro@gmail", "teknik pertanian"]
// ];

// array assosiative 
//definisinya sama seperti array numerik, kecuali
//key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Taylor Alison Swift",
    "nrp" => "90765545",
    "email" => "swiftasalis@gmail",
    "jurusan" => "teknik infomatika",
    "gambar" => "tay.jpeg"
    ],
    [
        "nama" => "Jennie Ruby Jane",
        "nrp" => "90654445",
        "email" => "rubyjanee23@gmail",
        "jurusan" => " kedokteran",
        "gambar" => "jj.jpg"
        ]
    ];
    





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
    <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
        <li>nama : <?= $mhs["nama"]; ?></li>
        <li>nrp : <?= $mhs["nrp"]; ?></li>
        <li>email : <?= $mhs["email"]; ?></li>
        <li>jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>