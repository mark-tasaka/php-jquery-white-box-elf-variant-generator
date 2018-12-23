
function addLanguages (intelligence)
{
    let languages = intelligence - 10;
    let message = "";
    
    if(languages == 1)
        {
            message = "1 additional language";
        }
    else if(languages > 1)
        {
            message = languages + " additional languages";
        }
    else
        {
            message = "";
        }
    
    return message;
    
}