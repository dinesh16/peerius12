<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function cleanSizes($sizeName){

    $sizename = $sizeName;
    
    if(stristr($sizename,"Waist") && stristr($sizename," - ") ) {
        $snparts = explode(" - ",$sizename);
        $sizename = $snparts[1];
        $showsizeb = str_replace("02","2",$snparts[0]);
        $showsizeb = str_replace("03","3",$showsizeb);
        $showsizeb = str_replace("04","4",$showsizeb);
        $showsizeb = str_replace("05","5",$showsizeb);
        $showsizeb = str_replace("06","6",$showsizeb);
        $showsizeb = str_replace("07","7",$showsizeb);
        $showsizeb = str_replace("08","8",$showsizeb);
        $showsizeb = str_replace("09","9",$showsizeb);
    }

    if(stristr($sizename,"WAIST")) {
        $snparts = explode("WAIST",$sizename);
        $sizename = $snparts[0]."WAIST";
        $dashpart = explode(" - ",$sizename);
        $sizename = $dashpart[0];
    }
    
    //post
    //posting not accepted

    $pipeparts = explode("|",$sizename);
    $sizename = $pipeparts[0];
    
    
    if ($rightsize == strtoupper(substr($sizename,0,5)) and $sizecount >0){
        $sizelist[$sizename] = 0;
    }
    if(stristr($sizename,"cup")) {
        $cupparts = explode(" ",$sizename);
        $sizename = $cupparts[0]; 
        $extraspilt = explode("-",$sizename);
        $sizename = $extrasplit[0]; 
    }

    $showsize = str_replace("UK 0","UK ",stripslashes($sizename));

    if(stristr($showsize,"cm/")) {
        $snpartsb = explode("CM/",strtoupper($showsize));
        $showsize = $snpartsb[0]."cm";
    }

    $showsize = str_replace("01","1",$showsize);
    $showsize = str_replace("02","2",$showsize);
    $showsize = str_replace("03","3",$showsize);
    $showsize = str_replace("04","4",$showsize);
    $showsize = str_replace("05","5",$showsize);
    $showsize = str_replace("08","8",stripslashes($showsize));
    $showsize = str_replace("06","6",$showsize);
    $showsize = str_replace("07","7",$showsize);
    $showsize = str_replace("09","9",$showsize);
    $showsize = str_ireplace(" INCH","\"",$showsize);

    if ($startsize && $kidflag == 0 && (stristr($showsize,"YRS"))) {
        $kidflag = 1;
    }
    if (!strstr($size_set," ".$showsize." " && $showsize <> "")) {
        $sizearray[$sizename] = $showsize;
    }
    return $showsize;
}



?>
