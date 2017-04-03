<?php
/*
2.3. Treći zadatak
Napiši funkciju koja kao parameter prima neki niz, a kao rezultat vraća element koji se najviše
puta ponavlja unutar tog niza.
*/

function niz($array)
{
  	$extraArray = array();
    foreach($array as $value) 
    {
        foreach($extraArray as $key2 => $value2) 
        {
            if(strtolower($key2) == strtolower($value)) 
            {
                $extraArray[$key2]++;
                continue 2;
            }
        }
        $extraArray[$value] = 1;
    }

    //traži maksimum
    $max_tmp = 0;
    foreach ($extraArray as $key => $value) 
    {
    	if($value > $max_tmp)
    	{
    		$max_tmp = $value;
    		$max = $key;
    	}
    }

    echo $max;
}

niz(["X", "x", "y", "y"]);