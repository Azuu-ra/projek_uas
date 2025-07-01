<?php
$data = array (
    array("nama" => "Andi","alamat" => "jakarta","transaksi"=>"10","belanja" =>"50.000"),
    array("nama" => "Budi","alamat" => "Bandung","transaksi"=>"5","belanja" =>"75.000"),
    array("nama" => "Citra","alamat" => "Surabaya","transaksi"=>"7","belanja" =>"62.000",),
    array("nama" => "Dinda","alamat" => "Yokyakarta","transaksi"=>"8","belanja" =>"54.000"),
    array("nama" => "Eka","alamat" => "Medan","transaksi"=>"4","belanja" =>"70.000")
);
$totalSeluruh = 0;
echo "<h2>Data Belanja +62</h2>";
echo "<table border='2' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nama Pelanggan</th><th>Alamat</th><th>Jumlah Transaksi</th><th>Rata Belanja</th><th>Total Belanja</th></tr>";
foreach ($data as $key) {
    $belanja = str_replace('.', '', $key["belanja"]);
    $totalBelanja = $key["transaksi"] * $belanja;
    $totalSeluruh += $totalBelanja;
    echo "<tr>";
    echo "<td>" . $key["nama"] . "</td>";
    echo "<td>" . $key["alamat"] . "</td>";
    echo "<td>" . $key["transaksi"] . "</td>";
    echo "<td>" . $key["belanja"] . "</td>";
    echo "<td>" . number_format($totalBelanja) . "</td>";
    echo "</tr>";
}
echo "<tr>
        <td colspan='4'>Total Belanja Seluruh Pelanggan</td>
        <td>" . number_format($totalSeluruh) . "</td>
      </tr>";

echo "</table>";
?>
