<?php
$nim = "250030612";
$nama = "I Gusti Ngurah Agung Wahyu Subagia";
$kodeJurusan = "SI";
$angkatan = 2025;
$umur = 19;
$gender = "Laki-laki";
$hobi = ["Olahraga"];

echo "Biodata Mahasiswa<br>";
echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Kode Jurusan: $kodeJurusan<br>";
echo "Angkatan: $angkatan<br>";
echo "Umur: $umur tahun<br>";
echo "Gender: $gender<br>";
echo "Hobi: " . implode(", ", $hobi);
?>