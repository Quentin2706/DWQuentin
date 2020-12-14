var nb = parseInt(prompt("Entre la longueur du tableau"));

var array = []; 
for(let i =0; i<nb; i++)
{
    var val = prompt("Entre une valeur du tableau");
    array.push(val);
}

for(let i =0; i<nb; i++)
{
    document.write(array[i]+"<br>");
}
