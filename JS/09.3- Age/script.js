var date = prompt ("Donnez votre année de naissance");
parseInt(date);

var auj =  new Date();
var auj = auj.getFullYear();
age = auj-date;
if (age >= 18)
{
    alert("Vous etes majeur");
}else {
    alert("vous etes mineur");
}
