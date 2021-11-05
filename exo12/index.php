<?php

function changeTime($nombre){    
    $seconde=$nombre%60;
    $temp=($nombre-$seconde)/60;
    $minute=($temp)%60;    
    $heure=(($temp)-$minute)/60;
    return 'Ce nombre : '.$nombre.' correspond à : '.$heure.'h'.$minute.'m'.$seconde.'s.';
}
echo changeTime(347872);    