<?php

function moveRate ($totalWeight, $race)
{
    $move = "12 (0-75 lb.)";
    
    if($race == "Dwarf" || $race == "Halfling")
    {
        
        if($totalWeight >= 76 && $totalWeight <=100)
        {
            $move = "6 (76-100 lb.)";
        }
        else if($totalWeight >= 101 && $totalWeight <=150)
        {
            $move = "3 (101-150 lb.)";
        }
        else if($totalWeight >=151)
        {
            $move = "3 (151-300 lb.)";
        }
        else
        {
            $move = "9 (0-75 lb.)";
        }
        
    }
    else
    {
        
        if($totalWeight >= 76 && $totalWeight <=100)
        {
            $move = "9 (76-100 lb.)";
        }
        else if($totalWeight >= 101 && $totalWeight <=150)
        {
            $move = "6 (101-150 lb.)";
        }
        else if($totalWeight >=151)
        {
            $move = "3 (151-300 lb.)";
        }
        else
        {
           $move = "12 (0-75 lb.)";
        }
        
        
    }
    
    return $move;
    
}


?>