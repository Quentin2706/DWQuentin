function societe(string)
{
    string.length <= 1 ? alert("il n'y a pas assez de caractère dans le champ societe") : "";
}
function personne(string)
{
    string.length <= 1 ? alert("il n'y a pas assez de caractère dans le champ personne a contacter") : "";
}
function ville(string)
{
    string.length <= 1 ? alert("il n'y a pas assez de caractère dans le champ ville ") : "";
}
function codePostal(string)
{
    string.length <= 5 ? alert("il n'y a pas assez de caractère dans le champ code postal") : "";
}
function email(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(document.getElementById("email").value))
  {
    return (true);
  }
    alert("Vous n'avez pas entré une adresse mail Valide !");
    return (false);
}

// function afficherOption()
// {
//     var select = document.getElementById("select").value;
//     console.log(select);
//     document.getElementById("selectInput").value=select;

// }
function afficherOption()
{
    var select=document.getElementById("select").value;
    console.log(select);
    if (select=="Autres" || select=="Choisissez")
    {
        document.getElementById("selectInput").value="";
    }
    else{
        document.getElementById("selectInput").value=select;
    }
}



function envoyer()
{
    var string = document.getElementById("societe").value;
    societe(string);
    var string = document.getElementById("personne").value;
    personne(string);
    var string = document.getElementById("ville").value;
    ville(string);
    var string = document.getElementById("codePostal").value;
    codePostal(string);
    var string = document.getElementById("email").value;
    email(string);

}
