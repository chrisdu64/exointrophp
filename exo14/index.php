<?php

    $nombre=[2721,34245,64444,24348,43483,1844,44861,68651,56956,98414];
    $petit=9223372036854775807;
    for($i=0;$i< count($nombre);$i++){
        if ($petit > $nombre[$i]){
            $petit = $nombre[$i];
        }
    }
    echo $petit;

