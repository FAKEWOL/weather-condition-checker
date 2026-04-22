<?php
	sıcaklık = 20;
	if ($sıcaklık <= -30 && $sıcaklık >= -10) {
		$durum = "cok soguk";
	} elseif ($sıcaklık >= -9 && $sıcaklık <= 0) {
		$durum = "soguk";
	} elseif ($sıcaklık >= 1 && $sıcaklık <= 10) {
		$durum = "serin";
	} elseif ($sıcaklık >= 11 && $sıcaklık <= 30) {
		$durum = "sıcak";
	} else {
		$durum = "cok sıcak";
	}
	echo $durum;
?>