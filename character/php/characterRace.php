<?php

function demiHumanTraits ($race)
{
    $traits = "";
    
    if($race === "Dwarf")
    {
        $traits = "FIGHTING GIANTS: Suffer 1/2 normal damage when figting giant-type creatures.<br/>
        KEEN DETECTION: Spotting traps, slanting passages, constructs, etc. while<br/>
        underground (1-4 on d6 when searching; 1-2 passing by).<br/>
        SAVING THROWS: +4 bonus for saving throws vs. magic.";
    }
    else if($race === "Elf")
    {
        $traits = "
        HEREDITARY FOES: Gain +1 bonus to hit or damage against goblins, orcs,<br/>
        intelligent undead and lycanthropes.<br/>
        KEEN DETECTION: Spotting hidden or concealed doors (1-4 on d6 when<br/>
        searching; 1-2 passing by).";
    }
    else if($race === "Halfling")
    {
        $traits = "FIGHTING GIANTS: Suffer 1/2 normal damage when figting giant-type creatures.<br/>
        DEADLY ACCURACY WITH MISSILES: +2 'to-Hit' when firing missile weapons.<br/>
        NEAR INVISIBILITY: Difficult to spot when not engaged in combat.<br/>
        SAVING THROWS: +4 bonus for saving throws vs. magic.";
    }
    else
    {
        $traits = "";
    }
    
    return $traits;

}

function missileBonusHalfling ($race)
{
    $missileBonus = 0;
    
    if($race === "Halfling")
    {
         $missileBonus = 2;
    }
    
    return $missileBonus;
}

function dwarfSaveMod ($race)
{
    $adjustment = 0;
    
    if($race === "Dwarf")
    {
         $adjustment = 4;
    }
    
    return $adjustment;
}




?>