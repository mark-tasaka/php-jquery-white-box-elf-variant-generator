/*Ability Score Prime Requisite XP Bonus/Penality*/

function exBonus (prime, wisdom, charisma)
{
    let bonus = 0;
    
    if(prime >= 15)
        {
            bonus += 5;
        }
    
    if(wisdom >= 15)
        {
            bonus += 5;
        }
    
    
    if(charisma >= 15)
        {
            bonus += 5;
        }
    
    return bonus;
}

function hirelings (charisma)
{
    let message ="";
    
    if(charisma <=4)
        {
            message ="HIRELINGS: Max # 1; Loyalty: -2";
        }
    else if(charisma >=5 && charisma <=6)
        {
            message ="HIRELINGS: Max # 2; Loyalty: -2";
        }
    else if(charisma >=7 && charisma <=8)
        {
            message ="HIRELINGS: Max # 3; Loyalty: -1";
        }
    else if(charisma >=9 && charisma <=12)
        {
            message ="HIRELINGS: Max # 4; Loyalty: +0";
        }
    else if(charisma >=13 && charisma <=15)
        {
            message ="HIRELINGS: Max # 5; Loyalty: +1";
        }
    else if(charisma >=16 && charisma <=17)
        {
            message ="HIRELINGS: Max # 6; Loyalty: +2";
        }
    else if(charisma ==18)
        {
            message ="HIRELINGS: Max # 7; Loyalty: +2";
        }
    
    return message;
    
}