<?php

function solution($niz, $brojgrupa)
{
	$noviniz = array();
	rsort($niz);
	$i = 0;
	foreach ($niz as $key => $value) 
	{
		if($i < $brojgrupa)
		{
			$noviniz[$i][] = $value;
		}
		else
		{
			$minsum_key = 0;
			$minsum = array_sum($noviniz[0]);
			foreach ($noviniz as $key2 => $value2) 
			{
				if(array_sum($value2) < $minsum)
					$minsum_key = $key2;
			}

			$noviniz[$minsum_key][] = $key2;
		}
		$i++;
	}

	return $noviniz;

}

$x = solution([2, 1, 4, 7, 1, 2, 6, 8], 3);
var_dump($x);

$x = solution([2, 1, 4, 7, 1, 2, 6, 8, 2, 7, 9], 2);
var_dump($x);