/*HitPoints randomly generate hit points*/

function getHitPoints (level, conMod)
{
    let hitPoints = 0;
        
    if(level == 1)
        {
            hitPoints = Math.floor((Math.random() * 6) + 2) + conMod;

            if(hitPoints < 4)
                {
                    hitPoints = 4;
                }

        }
    else if(level == 2)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod);

            if(hitPoints < 6)
                {
                    hitPoints = 6;
                }
        }
    else if(level == 3)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 2) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod);

            if(hitPoints < 7)
                {
                    hitPoints = 7;
                }
        }
    else if(level == 4)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) ;

            if(hitPoints < 9)
                {
                    hitPoints = 9;
                }
        }
    else if(level == 5)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 2) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) ;

            if(hitPoints < 10)
                {
                    hitPoints = 10;
                }
        }
    else if(level == 6)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod)+ (Math.floor((Math.random() * 6) + 1) + conMod);

            if(hitPoints < 12)
                {
                    hitPoints = 12;
                }
        }
    else if(level == 7)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 2) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod)+ (Math.floor((Math.random() * 6) + 1) + conMod);

            if(hitPoints < 13)
                {
                    hitPoints = 13;
                }
        }
    else if(level == 8)
        {
            hitPoints = (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod) + (Math.floor((Math.random() * 6) + 1) + conMod)+ (Math.floor((Math.random() * 6) + 1) + conMod)+ (Math.floor((Math.random() * 6) + 1) + conMod);

            if(hitPoints < 15)
                {
                    hitPoints = 15;
                }
        }
    
    return hitPoints;
    
}

function getHitDiceAmount (level)
{
    let hd = "-";
    
    if(level == 1)
        {
            hd = "1+1";
        }
    else if(level == 2)
        {
            hd = "2";
        }
    else if(level == 3)
        {
            hd = "2+1";
        }
    else if(level == 4)
        {
            hd = "3";
        }
    else if(level == 5)
        {
            hd = "3+1";
        }
    else if(level == 6)
        {
            hd = "4";
        }
    else if(level == 7)
        {
            hd = "4+1";
        }
    else if(level == 8)
        {
            hd = "5";
        }
    
    return hd;
                
}