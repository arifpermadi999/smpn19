<?php 
	
	function bulanIndo()
	{
		$bln = date('m');
		switch ($bln) {
			case '01':
				return 'January';
				break;
			case '02':
				return 'February';
				break;
			case '03':
				return 'Maret';
				break;
			case '04':
				return 'April';
				break;
			case '05':
				return 'Mei';
				break;
			case '06':
				return 'Juni';
				break;
			case '07':
				return 'July';
				break;
			case '08':
				return 'Agustus';
				break;
			case '09':
				return 'September';
				break;
			case '10':
				return 'Oktober';
				break;
			case '11':
				return 'November';
				break;
			case '12':
				return 'Desember';
				break;
		}
	}

	function tanggal()
	{
		return date('d/m/Y');
	}


?>