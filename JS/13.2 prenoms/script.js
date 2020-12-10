var tab = ["f", "k", "g","yt"];

var index = prompt("Donnez le mot a trouver ");
    var prenom = tab.indexOf(index);
    tab.splice(prenom, 1);
    tab.push("");
    document.write(tab);
