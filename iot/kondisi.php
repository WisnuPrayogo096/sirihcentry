<?php
    require 'koneksi.php';
    
    $sql = $conn->query("SELECT * FROM data_sensor ORDER BY id DESC");
    // Memeriksa apakah query mengembalikan baris data
    if(mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_array($sql);
        $presentase = $data['presentase'];

        if ($presentase > 60 && $presentase <= 100) {
            echo "Basah";
        } else if ($presentase > 30 && $presentase <= 60) {
            echo "Normal";
        } else if ($presentase > 0 && $presentase <=30) {
            echo "Kering";
        } else {
            echo "tidak terdeteksi";
        }
    } else {
        echo "kosong";
    }
?>
