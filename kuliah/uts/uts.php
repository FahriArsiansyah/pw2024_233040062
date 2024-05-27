<?php 
function cetak_bintang($angka) {
    // Lopping untuk mencetak baris
    for ($i = 1; $i <= $angka; $i++) {
        // Lopping untuk mencetak karakter '*' pada setiap baris 
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        // Mencetak baris baru stelah selesai mencetak karakter '*' 
        echo "<br>";
    }
}

// Contoh pemanggilan fungsi dengan parameter 3
cetak_bintang(3);
?>