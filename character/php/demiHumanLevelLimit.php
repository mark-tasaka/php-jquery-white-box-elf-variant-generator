<?php
/*Fighter Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 6)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 6;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 8)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 8;
        }
    }
    else if($race === "Halfling")
    {
        if($level <= 4)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 4;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>