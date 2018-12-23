<?php

function getCoins ($input)
{
        $a00 = array(0, " gold pieces", 0, " gold pieces");
        $a01 = array(rand(1, 6), " silver pieces", rand(1, 6) + rand(1, 6), " copper pieces");
        $a02 = array(rand(1, 6) + rand(1, 6), " gold pieces", rand(1, 6) + rand(1, 6), " silver pieces");
        $a03 = array(rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6), " gold pieces", rand(1, 6), " silver pieces");

        $array1= array($a00, $a01, $a02, $a03);
        
        return $array1[$input];
}



?>