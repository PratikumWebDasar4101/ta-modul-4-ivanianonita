<?php
session_start();
$nama=$_POST["nama"];
$nomer=["nomer"];
$belanjaan=$_POST["belanjaan"];
$pengiriman=$_POST["pengiriman"];
$alamat=$_POST["alamat"];
$tanggal=date('d-m-Y');


echo "Tanggal Pembeliaan : $tanggal<br><br>";
echo "Alamat : $alamat";
 echo "<p>Barang yang dibeli</p>";

foreach ($belanjaan as $nilai) {
	echo "- $nilai <br />";
}

$totalBiaya = 0;

if ($pengiriman=="JNE") {
	$hargapengiriman = 25000;
}elseif ($pengiriman=="TIKI") {
	$hargapengiriman = 20000;
}elseif ($pengiriman=="JNT"){
	$hargapengiriman = 28000;
}


for ($i = 0; $i < count($belanjaan); $i++) { 
	if ($belanjaan[$i] == "Dispenser") {
		$harga = 300000;
	} elseif($belanjaan[$i] == "AC"){
		$harga = 2000000;
	} else {
		$harga = 150000;
	}
	
	$totalBiaya = $totalBiaya + $harga;
}
error_reporting(0);
echo "<br>Harga Pengiriman $pengiriman : Rp. ". number_format($hargapengiriman)."<br>";
$totalBiaya = $totalBiaya + $hargapengiriman;
$baris = count($_SESSION['daftarbelanja']);
$_SESSION['daftarbelanja'][$baris] = array(
	"belanjaan" => $belanjaan, "pengiriman" => $pengiriman, "alamat" => $alamat, "totalBiaya" => $totalBiaya
);
$daftarbelanjaan = $_SESSION['daftarbelanja'];
echo "<br>Total Harga = Rp." . number_format($daftarbelanjaan[0]['totalBiaya']);

?>
