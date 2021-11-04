<?php

    $nombre=347872;
    $seconde=$nombre%60;
    $minute=(($nombre-$seconde)/60)%60;    
    $heure=((($nombre-$seconde)/60)-$minute)/60;
    /*
    $heure=$minute%24;*/
    echo 'Ce nombre : '.$nombre.' correspond à : '.$heure.'h'.$minute.'m'.$seconde.'s.';