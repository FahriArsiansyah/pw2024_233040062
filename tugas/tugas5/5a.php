<?php
$mahasiswaif = [
    [
        "nama" => "Fahri Arsiansyah",
        "nrp" => "233040062",
        "email" => "fahri233040062@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fahri2.jpg",

    ],
    [
        "nama" => "Emmir Fahrezi",
        "nrp" => "233040054",
        "email" => "emmir233040054@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "emmir.jpg",

    ],
    [
        "nama" => "Cristiano Ronaldo",
        "nrp" => "233040007",
        "email" => "ronaldo233040007@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ronaldo.jpg",

    ],
    [
        "nama" => "Lionel Messi",
        "nrp" => "233040010",
        "email" => "messi233040010@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "messi.jpg",

    ],
    [
        "nama" => "Jude Bellingham",
        "nrp" => "233040005",
        "email" => "bellingham233040005@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "bellingham.jpg", 

    ],
    [
        "nama" => "Brahim Diaz",
        "nrp" => "233040021",
        "email" => "brahim233040021@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "brahim.jpeg",

    ],
    [
        "nama" => "Kylian Mbappe",
        "nrp" => "233040009",
        "email" => "mbappe233040009@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mbappe.jpg",

    ],
    [
        "nama" => "Toni Kroos",
        "nrp" => "233040008",
        "email" => "kroos233040008@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kroos.jpeg",

    ],
    [
        "nama" => "Mohamed Salah",
        "nrp" => "233040011",
        "email" => "salah233040011@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "salah.jpg",

    ],
    [
        "nama" => "Luka Modric",
        "nrp" => "233040012",
        "email" => "modric233040012@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "modric.jpg",

    ],


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar 10 Mahasiswa IF</title>
    <style>
        img {

            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Daftar 10 Mahasiswa IF</h1>

    <?php foreach ($mahasiswaif as $if) : ?>
        <ul>
            <li>
            <img src="gambar/<?=$if["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $if["nama"]; ?></li>
            <li>NRP : <?= $if["nrp"]; ?></li>
            <li>Email : <?= $if["email"]; ?></li>
            <li>Jurusan : <?= $if["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>