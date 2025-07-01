<?php
function barisLirik($angka) {
    if ($angka == 1) {
        return "Pada hari minggu ku turut ayah ke kota";
    } elseif ($angka == 2) {
        return "Naik delman istimewa kududuk di muka";
    } elseif ($angka == 3) {
        return "Kududuk samping pak kusir yang sedang bekerja";
    } elseif ($angka == 4) {
        return "Mengendarai kuda supaya baik jalannya";
    } else {
        return "Nomor lirik tidak valid (1-4)";
    }
}
echo barisLirik(2);
?>
