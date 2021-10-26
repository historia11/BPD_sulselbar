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
	
	// variabel pecahkan 0 = tahun
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tanggal
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function hari_indo($hari){
    switch ($hari) {
        case 'Sunday':
            return 'Minggu';
        case 'Monday':
            return 'Senin';
        case 'Tuesday':
            return 'Selasa';
        case 'Wednesday':
            return 'Rabu';
        case 'Thursday':
            return 'Kamis';
        case 'Friday':
            return 'Jumat';
        case 'Saturday':
            return 'Sabtu';
        default:
            return 'hari tidak valid';
    }
}

function jum_hari(){
    $bulanIni = date('m');
    $tahunIni = date('Y');
    $jumHari = cal_days_in_month(CAL_GREGORIAN, $bulanIni, $tahunIni);
    return $jumHari;
}

function waktu_interval($jam){
    switch ($jam) {
        case 1-$jam==1:
            return '00:00-01:00';
        case 2-$jam==1:
            return '01:00-02:00';
        case 3-$jam==1:
            return '02:00-03:00';
        case 4-$jam==1:
            return '03:00-04:00';
        case 5-$jam==1:
            return '04:00-05:00';
        case 6-$jam==1:
            return '05:00-06:00';
        case 7-$jam==1:
            return '06:00-07:00';
        case 8-$jam==1:
            return '07:00-08:00';
        case 9-$jam==1:
            return '08:00-09:00';
        case 10-$jam==1:
            return '09:00-10:00';
        case 11-$jam==1:
            return '10:00-11:00';
        case 12-$jam==1:
            return '11:00-12:00';
        case 13-$jam==1:
            return '12:00-13:00';
        case 14-$jam==1:
            return '13:00-14:00';
        case 15-$jam==1:
            return '14:00-15:00';
        case 16-$jam==1:
            return '15:00-16:00';
        case 17-$jam==1:
            return '16:00-17:00';
        case 18-$jam==1:
            return '17:00-18:00';
        case 19-$jam==1:
            return '18:00-19:00';
        case 20-$jam==1:
            return '19:00-20:00';
        case 21-$jam==1:
            return '20:00-21:00';
        case 22-$jam==1:
            return '21:00-22:00';
        case 23-$jam==1:
            return '22:00-23:00';
        case 24-$jam==1:
            return '23:00-00:00';
        default:
            return 'waktu tidak valid';
      }
}
?>