<?php

function generationMethod ($abilityScore)
{
    $dice = array(0, 0, 0, 0);
    
    if($abilityScore == 1)
    {
        $dice = array(6, 3, 0, 0);
    }
    
    if($abilityScore == 2)
    {
        $dice = array(6, 4, 1, 0);
    }
    
    if($abilityScore == 3)
    {
        $dice = array(6, 2, 0, 6);
    }
    
    if($abilityScore == 4)
    {
        $dice = array(8, 2, 0, 2);
    }
    
    
    if($abilityScore == 5)
    {
        $dice = array(7, 2, 0, 4);
    }
    
    return $dice;
}

function generationMesssage ($abilityScore)
{
    $message = "";
    
    if($abilityScore == 1)
    {
        $message = "Ability Score Generation: 3d6";
    }
    
    if($abilityScore == 2)
    {
        $message = "Ability Score Generation: 4d6, drop the lowest";
    }
    
    if($abilityScore == 3)
    {
        $message = "Ability Score Generation: 2d6 + 6";
    }
    
    if($abilityScore == 4)
    {
        $message = "Ability Score Generation: 2d8 + 2";
    }
    
    
    if($abilityScore == 5)
    {
        $message = "Ability Score Generation: 2d7 + 4";
    }
    
    return $message;
}


?>