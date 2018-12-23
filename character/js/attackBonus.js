
function attackBonus (level)
{
    let toHit = 1;
    
    if(level >= 2 && level <= 3)
    {
        toHit = 2;
    }
    else if(level == 4)
    {
        toHit = 3;
    }
    else if(level >= 5 && level <= 6)
    {
        toHit = 4;
    }
    else if(level == 7)
    {
        toHit = 5;
    }
    else if(level >= 8 && level <= 10)
    {
        toHit = 6;
    }
    else if(level >= 11 && level <= 12)
    {
        toHit = 7;
    }
    else if(level >= 13 && level <= 15)
    {
        toHit = 8;
    }
    else if(level >= 16 && level <= 17)
    {
        toHit = 9;
    }
    else if(level >= 18 && level <= 20)
    {
        toHit = 10;
    }
    
    return toHit;
}
