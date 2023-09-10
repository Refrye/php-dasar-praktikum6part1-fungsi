<?php
// Tanggal dan waktu awal
$tanggal_waktu_awal = new DateTime("2023-09-4 01:34:00");

// Tambah 1 hari
$tanggal_waktu_awal->add(new DateInterval("P1D"));

// Kurangi 3 jam
$tanggal_waktu_awal->sub(new DateInterval("PT3H"));

// Cetak tanggal dan waktu akhir
echo $tanggal_waktu_awal->format("Y-m-d H:i:s");
