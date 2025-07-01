<?php
$lirikasli = [
    "Kau tak perlu berbohong, kau masih menginginkannya","Ku rela kau dengannya, asalkan kau bahagia",
    "Katakanlah sekarang bahwa kau tak bahagia","Aku punya ragamu tapi tidak hatimu"];
$Benar = [2, 3, 0, 1];
$Tersusun = [];
foreach ($Benar as $kay) {
    $Tersusun[] = $lirikasli[$kay];
}
echo "<h2>Lirik Lagu: Armada – Asal Kau Bahagia (Tersusun Berdasarkan Indeks)</h2>";
foreach ($Tersusun as $baris) {
    echo $baris . "<br>";
}
?>
