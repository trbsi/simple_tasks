<?php
/*
2.5. Peti zadatak
Napišite funkciju koja prima dva niza znakova (stringa) i vraća najduži zajednički niz (substring).
*/

function substring($s1, $s2)
{
	$s1_len = strlen($s1);
	$s2_len = strlen($s2);
	$return = '';

	$najveci_podstring = array();
	$najveca_duzina = 0;

	for ($i=0; $i < $s1_len; $i++) 
	{ 
		for ($j=0; $j < $s2_len; $j++) 
		{ 
			if($s1[$i] === $s2[$j])
			{
				if($i === 0 || $j === 0)
				{
					$najveci_podstring[$i][$j] = 1;
				}
				else
				{
					$najveci_podstring[$i][$j] = $najveci_podstring[$i-1][$j-1]+1;
				}

				if($najveci_podstring[$i][$j] > $najveca_duzina)
				{
					$najveca_duzina = $najveci_podstring[$i][$j];
					$return = '';
				}
				if($najveci_podstring[$i][$j] === $najveca_duzina)
				{
					$return = substr($s1, $i-$najveca_duzina+1, $najveca_duzina);
				}
			}
			else
			{
				$najveci_podstring[$i][$j] = 0;
			}
		}
	}

	var_dump($return);
}

//substring("xyabcd", "12daabcdef");
substring("abcdef", "xyzabc");
