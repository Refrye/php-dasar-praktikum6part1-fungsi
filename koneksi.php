<?php
$koneksi = mysqli_connect("localhost", "root", "", "belajar-php");

// Data diri
$nama = "faisal";
$alamat = "Jalan Merdeka 123";
$umur = 23;
$tinggi = 175;
$berat = 75;
$sudah_menikah = 0; // karena ini boolean jadi false dan true itu 0 dan 1
$hobi = ["Membaca", "Menulis", "Bermain Gitar"];
$pekerjaan = "pelajar";


// Ubah array hobi menjadi format yang sesuai
$hobiStr = implode(", ", $hobi);

// Query SQL untuk menyimpan data ke dalam tabel orang
$sql = "INSERT INTO orang (nama, alamat, umur, tinggi, berat, sudah_menikah, pekerjaan, hobi) VALUES ('$nama', '$alamat', $umur, $tinggi, $berat, $sudah_menikah, '$pekerjaan', '$hobiStr')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan ke database.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
