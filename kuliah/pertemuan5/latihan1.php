<?php 
    // 1. membuat Array
    $hari = array("senin", "selasa", "rabu");
    $bulan = ["Januarai", "Februari", "Maret"];
    $mhs = ["Fahri Rizqon Arsiansyah", 3.2, false];
    // 2. Mencetak Array (1)
    //cetak 1 nilai mengunakan index
    echo $hari[0];
    echo "<br>";
    echo "Saya ".$bulan[2];
    echo "<br>";
    echo $mhs[1];
    echo "<hr>";

    //Cetak seluruh Array 
    //var_dump() / print_r(). Khusus untuk developer/debugging
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    var_dump($mhs);
    echo "<hr>";

    // 3. Manipulasi Array
    //Menambahkan isi Array

    //di akhir Array: [] atau array_push()
    $hari[] = "kamis";
    $hari[] = "Jumat";
    print_r($hari);
    echo "<br>";

    array_push($bulan, "april", "Mei", "Juni");
    print_r($bulan);
    echo "<br>";

    //di awal Array: array_unshift()
    array_unshift($mhs, "233040043");
    print_r($mhs);
    echo "<hr>";

    //Menghapus isi Array
    // di belakang : array_pop()
    array_pop ($hari);
    print_r($hari);
    array_shift($bulan);
    print_r($bulan);
    // di depan : array_shift()



    // 4.Mencetak Array (2)
?>