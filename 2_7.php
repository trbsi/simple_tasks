<?php
/*
2.7. Sedmi zadatak
Napišite funkciju koja ispisuje brojeve od 1 do 100, ali na način da za brojeve koji su djeljivi sa
tri ispiše “LOCA”, za brojeve koji su djeljivi sa 5 ispiše “STIC”, a za brojeve koji su djeljivi i sa 3
i sa 5 ispišite “LOCASTIC”
*/

function brojevi()
{
	for ($i=1; $i <= 100; $i++) 
	{ 
		if($i%3 == 0 && $i%5 == 0)
		{
			echo "Broj: $i => LOCASTIC<br>";
		}
		else if($i%3 == 0)
		{
			echo "Broj: $i => LOCA<br>";
		}
		else if($i%5 == 0)
		{
			echo "Broj: $i => STIC<br>";
		}
	}
}

brojevi();