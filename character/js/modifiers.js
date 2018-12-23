/*White Box RPG character generator
designed by Mark Tasaka 2018*/

function abilityScoreModifier(abilityScore)
{
    let modifier = 0;
    
    if(abilityScore <= 6)
        {
            modifier = -1;
        }
    else if(abilityScore >=7 && abilityScore <=14)
        {
            modifier = 0;
        }
    else if(abilityScore >= 15)
        {
            modifier = 1;
        }
    
    return modifier;
}


function addModifierSign (modifer)
{
    let value = "";
    
    if(modifer >=0)
        {
            value = "+" + modifer;
        }
    else
    {
        value = modifer;
    }
    
    return value;
}

