<?php
    
    $nombre = 0;

    for($i=1;$i<=30;$i++){
        function EstPair($i){
            if($i%2===0){
                $nombre+=$i;
            }
            else{
                $nombre+=0;
            }}
            return;  
        echo EstPair($i);        
    }
    echo $nombre;

    /* 
    function EstPair($i){
        if($i%2===0){
            echo $i.' est un nombre pair.'.PHP_EOL;
        }
        else{
            echo $i.' est un nombre impair.'.PHP_EOL;
        }
        return;    
    }
    echo EstPair($i);*/
    
    