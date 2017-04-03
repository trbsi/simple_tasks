<?php
/*
2.1. Prvi zadatak
Napiši funkciju koja kao parametar prima string, te kao rezultat vraća true ako je zadani string
palindrom. U suprotnom vraća false.
Primjer palindroma: anavolimilovana
Definicija palindroma (hr: obrtaljka): http://hr.wikipedia.org/wiki/Obrtaljka
*/

function polindrom($string)
{
	//podijeli riječ na slova
	$polindrom = str_split($string);
	$noviString = "";

	for ($i = (count($polindrom)-1); $i >= 0; $i--) 
	{
	    $noviString.=$polindrom[$i];
	}


	if ($string == $noviString) 
	{
	    echo "Polindrom je.";
	} 
	else 
	{
	    echo "Nije polindrom.";
	}
}

polindrom("anavolimilovana");