<?php
if (isset($_POST['Nama']) && isset($_POST['NIM']) && isset($_POST['kelas'])) {
	$Nama = $_POST['Nama'];
	$NIM = $_POST['NIM'];
	$kelas = $_POST['kelas'];

	$file = fopen('dariform.txt', 'w');
	fwrite($file, $Nama);
	fwrite($file,'\n');

	fwrite($file, $NIM);
	fwrite($file,'\n');

	fwrite($file, $kelas);
	fwrite($file,'\n');

	fclose($file);

	echo "Nama : ".$Nama."<br>"."NIM : ".$NIM."<br>"."Kelas : ".$kelas."<br>";
}
?>