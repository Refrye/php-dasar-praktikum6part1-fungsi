<?php
$nilai = 65;
$predikat = $nilai > 80 ? 'Sangat Baik' : ( $nilai >= 70 && $nilai <= 80 ? 'Baik' : ( $nilai <= 60 && $nilai > 50 ? 'Sedang' : 'Kurang'));
echo $predikat;
