<?php 
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
echo date('h:i:s a'); // menampilkan jam sekarang
echo "<br/>";
echo date('l, d-m-Y  H:i:s'); //kombinasi jam dan tanggal
?>

<br><br><br>

<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
echo tgl_indo(date('Y-m-d'));
?>

<?php
function hari_indo($day){
  $hari = array(
2 => 'Senin';
'Selasa';
'Rabu';
'Kamis';
'Jumat';
'Sabtu';
'Minggu';
  );
  $pecahkan = explode('-', $hari)
  // variabel pecahkan 0 = Senin
	// variabel pecahkan 1 = Selasa
	// variabel pecahkan 2 = Rabu
  // variabel pecahkan 3 = Kamis
	// variabel pecahkan 4 = Jumat
	// variabel pecahkan 5 = Sabtu
  // variabel pecahkan 6 = Minggu
  return 
  $pecahkan[0] . ' ' . 
  $bulan[ (int)$pecahkan[1] ] . ' ' . 
  $bulan[ (int)$pecahkan[1] ] . ' ' .
}
?>
