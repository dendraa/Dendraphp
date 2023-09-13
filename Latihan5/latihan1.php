<?php
//variabel scope / lingkup variabel
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
            "jurusan" => "kedokteran",
            "gambar" => "jjj.jpg"
            ]
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul> 
        <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>    
</body>
</html>