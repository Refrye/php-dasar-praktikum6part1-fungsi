<?php
$koneksi = mysqli_connect("localhost", "root", "", "belajar-php");
// Data diri
$nama = "faisal";
$alamat = "Jalan Merdeka 123";
$umur = 23;
$tinggi = 175;
$berat = 75;
$sudah_menikah = false;
$hobi = ["Membaca", "Menulis", "Bermain Gitar"];
$pekerjaan = "pelajar";

// Tampilkan data
echo "Nama: $nama";
echo "<br>";
echo "Alamat: $alamat";
echo "<br>";
echo "Umur: $umur tahun";
echo "<br>";
echo "Tinggi: $tinggi cm";
echo "<br>";
echo "Berat: $berat kg";
echo "<br>";
// boolean
echo "Sudah menikah: $sudah_menikah";
echo "<br>";
var_dump($sudah_menikah);
// array
echo "<br>";
echo "Hobi: ";
foreach ($hobi as $item) {
    echo "    * $item";
}
echo "</br>";
echo "pekerjaan: $pekerjaan";

echo "</br>";
if (mysqli_connect_error()) {
    echo "Koneksi gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi berhasil";
}