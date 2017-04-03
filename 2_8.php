<?php
/*
2.8. Osmi zadatak
Napiši funkciju koja koristeći rekurziju prolazi kroz foldere te ispisuje datoteke unutar
pojedinog foldera.
*/

function direktorij($folder, &$rezultati = array())
{
    $fajlovi = scandir($folder);

    foreach($fajlovi as $key => $value)
    {
        $putanja = realpath($folder.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($putanja)) 
        {
            $rezultati[] = $putanja;
        } 
        else if($value != "." && $value != "..") 
        {
            direktorij($putanja, $rezultati);
            $rezultati[] = $putanja;
        }
    }

    return $rezultati;
}

print_r(direktorij("Wondershare"));