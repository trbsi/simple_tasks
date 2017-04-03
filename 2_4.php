<?php
/*
2.4. Četvrti zadatak
Napiši funkciju koja kao parameter prima neki niz cijelih brojeva, a kao rezultat vraća
najmanji broj unutar tog niza.
*/

function cijeli_brojevi($array)
{
	$min = $array[0];
	foreach ($array as $key => $value) 
	{
		if($value < $min)
			$min = $value;
	}

	echo "Najmanji broj je: ".$min;
}

cijeli_brojevi([2,3,6,9,0]);