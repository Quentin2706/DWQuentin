var nb1 = prompt("Entrez un premier nombre");
var op = prompt("Entrez l'opérateur +-*/");
var nb2 = prompt("Entrez un deuxieme nombre");
switch (op) {
    case "+":
        var result = (parseInt(nb1) + parseInt(nb2))
        alert(nb1 + op + nb2 + "=" + result);
        break;
    case "-":
        var result = (parseInt(nb1) - parseInt(nb2))
        alert(nb1 + op + nb2 + "=" + result);
        break;
    case "*":
        var result = (parseInt(nb1) * parseInt(nb2))
        alert(nb1 + op + nb2 + "=" + result);
        break;
    case "/":
            if (nb2 == 0) {
                alert("Division impossible");
            } else {
                var result = (parseInt(nb1) / parseInt(nb2))
                alert(nb1 + op + nb2 + "=" + result);
            }
            break;
    default:
        alert("Vous n'avez pas entrez l'un de ces opérateurs : + - * /")
}


