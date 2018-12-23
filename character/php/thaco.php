<?php

/*ELF*/

function thaco($level)
{
    $toHit = 19;
    
    if($level >= 2 && $level <=4)
    {
        $toHit = 18;
    }
    else if($level >= 5)
    {
        $toHit = 17;
    }
    
    return $toHit;
}



?>