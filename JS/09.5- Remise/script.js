var pu = prompt("Prix Unitaire du produit");
var qtecom = prompt("Quantité commandée");
var tot = parseInt(pu)*parseInt(qtecom);

if(tot >= 500)
{
    var port = 0; 
} else {
    var port = 6+(tot*0.02);
}

var rem = 0;
if(tot >= 100 && tot <= 200 )
{
    var rem = tot*0.05;
} else if (tot > 200){
    var rem = tot*0.1;
}

document.write("prix Unitaire = "+pu);
document.write("Quantité commandée = "+qtecom);
document.write("Total = "+tot);
document.write("Frais de port = "+port);
document.write("Remise = "+rem);
var pap = tot+port-rem;
document.write("Prix a payer = "+pap);


