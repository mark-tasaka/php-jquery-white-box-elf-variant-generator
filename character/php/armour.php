<?php

    function getArmour($input)
    {
        $a01 = array("", 0, 0);
        $a02 = array("Shield", 1, 10);
        $a03 = array("Leather Armour", 2, 25);
        $a04 = array("Leather Armour<br/>Shield", 3, 35);
        $a05 = array("Chain Mail", 4, 50);
        $a06 = array("Chain Mail<br/>Shield", 5, 60);
        $a07 = array("Plate Mail", 6, 75);
        $a08 = array("Plate Mail<br/>Shield", 7, 85);


        $array1= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08);
        
        return $array1[$input];
        
    }


    function getShield($input)
    {
        $a01 = array("", 0, 0);
        $a02 = array("X", 1, 5);


        $array1= array($a01, $a02);
        
        return $array1[$input];
        
    }

?>