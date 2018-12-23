<?php


function getClothing($input)
{
        $a00 = array("Belt, leather", 0);
        $a01 = array("Belt, wide leather", 1);
        $a02 = array("Boots, high hard leather", 3);
        $a03 = array("Boots, low hard leather", 2);
        $a04 = array("Boots, high soft leather", 2);
        $a05 = array("Boots, low soft leather", 1);
        $a06 = array("", 0);
        $a07 = array("Cap, cloth", 0);
        $a08 = array("Cap, leather", 0);
        $a09 = array("Cloak, cloth", 3);
        $a10 = array("Cloak, fur", 5);
        $a11 = array("Girdle", 1);
        $a12 = array("Hat", 0);
        $a13 = array("Robe, cloth", 5);
        $a14 = array("Robe, silk", 3);
        $a15 = array("Shirt, cloth", 1);
        $a16 = array("Shirt, leather patched", 1);
        $a17 = array("Trousers, heavy", 4);
        $a18 = array("Trousers, light", 2);

        $arr= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18);
        
        return $arr[$input];
}



?>