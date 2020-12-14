var nb = parseInt(prompt("Entrez votre nombre"));
arret = true; 

for (let i = 2; i < nb; i++) 
{   
    var divise = nb%i;
    divise == 0 ? arret = false : arret = true;                                                                                                                                         
    console.log(divise);
    divise == 0 ? arret = false : arret = true;    
}

arret == true ? document.write("le nombre est un nombre premier") : document.write("le nombre n'est un nombre premier");
