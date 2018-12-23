<?php
/*ELF Spells*/


function spellLevels ($level)
{
    
    $spells = array("", "", "", "", "");
    
    if($level >= 2 && $level <=3)
    {
        $spells = array("1", "", "", "", "");
    }
    else if($level >= 4 && $level <=6)
    {
        $spells = array("1", "2", "", "", "");
    }
    else if($level >=7)
    {
        $spells = array("1", "2", "3", "", "");
    }
    
    return $spells;
    
    
}

function spellLine ($level)
{
    
    $line = "";

    if($level >= 2 && $level <=3)
    {
        $line = "_____";
    }
    else if($level >= 4 && $level <=6)
    {
        $line = "_____________";
    }
    else if($level >=7)
    {
        $line = "___________________";
    }
    return $line;
    
}


function spellsEachLevel ($level)
{
    $spells = array("", "", "", "", "");
  
    if($level == 2)
    {
            $spells = array("1", "", "", "", "");   
    }
    else if($level == 3)
    {
            $spells = array("2", "", "", "", "");   
    }
    else if($level == 4)
    {
            $spells = array("2", "1", "", "", "");   
    }
    else if($level == 5)
    {
            $spells = array("3", "2", "", "", "");   
    }
    else if($level == 6)
    {
            $spells = array("4", "2", "", "", "");   
    }
    else if($level == 7)
    {
            $spells = array("4", "2", "1", "", "");   
    }
    else if($level == 8)
    {
            $spells = array("4", "2", "2", "", "");   
    }

    return $spells;
}

function spellHeader1 ($level)
{
    $header = "";
    
    if($level > 1)
    {
        $header = "Spell Level:";
    }
    
    return $header;
}

function spellHeader2 ($level)
{
    $header = "";
    
    if($level > 1)
    {
        $header = "Spells per level:";
    }
    
    return $header;
}



?>