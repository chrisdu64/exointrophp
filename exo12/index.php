<?php

function changeTime($nombre){    
    $seconde=$nombre%60;
    $minute=(($nombre-$seconde)/60)%60;    
    $heure=((($nombre-$seconde)/60)-$minute)/60;
    return 'Ce nombre : '.$nombre.' correspond à : '.$heure.'h'.$minute.'m'.$seconde.'s.';
}
echo changeTime(347872);    