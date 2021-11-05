<?php
# 1
$n=486;
    if($n%2===0){
        echo $n.' est un nombre pair.'.PHP_EOL;
    }
    else{
        echo $n.' est un nombre impair.'.PHP_EOL;
    }

# 2   

function EstPair($nombre){
    if($nombre%2===0){
        echo $nombre.' est un nombre pair.'.PHP_EOL;
    }
    else{
        echo $nombre.' est un nombre impair.'.PHP_EOL;
    }
    return;    
}
echo EstPair(623);

function estPasImpair($number){
    if($number%2){
        return true;
    }
    return false;
}