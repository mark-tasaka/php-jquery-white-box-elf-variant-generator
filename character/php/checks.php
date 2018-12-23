<?php

function removeZero ($input)
{
    if($input == 0)
    {
        $temp = (string)$input;
        $temp = " ";
        $input = $temp;
    }
    return $input;
}


?>