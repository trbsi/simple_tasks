<?php
/*
2.2. Drugi zadatak
Napiši funkciju koja prima dva integer parametra n i m, te kao rezultat vraća vrijednost n^m.
*/
function n_na_m($n, $m)
{
	$rezultat = 1;
	for($i=1; $i<=$m; $i++)
	{
		$rezultat = $rezultat*$n;
	}

	echo $rezultat;
}

n_na_m(2,5);