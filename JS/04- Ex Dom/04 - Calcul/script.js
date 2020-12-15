// var qte1 = document.getElementById("qte1");
// var qte2 = document.getElementById("qte2");
// var pu1 = document.getElementById("pu1");
// var pu2 = document.getElementById("pu2");

var lesInputs = document.getElementsByTagName("input");

for (let i; i< lesInputs.length; i++ )
{
    lesInputs[i].addEventListener("change", calcul);
}

function calcul()
{
    prix1 = qte1.value * pu1.value;
    prix2 = qte2.value * pu2.value;
    document.getElementById("prix1").value = prix1;
    document.getElementById("prix2").value = prix2;
    document.getElementById("total").value = prix1 + prix2;
}
// qte1.addEventListener("change", function () {
//     prix1 = qte1.value * pu1.value;
//     prix2 = qte2.value * pu2.value;
//     document.getElementById("prix1").value = prix1;
//     document.getElementById("prix2").value = prix2;
//     document.getElementById("total").value = prix1 + prix2;
// })
// pu1.addEventListener("change", function () {
//     prix1 = qte1.value * pu1.value;
//     prix2 = qte2.value * pu2.value;
//     document.getElementById("prix1").value = prix1;
//     document.getElementById("prix2").value = prix2;
//     document.getElementById("total").value = prix1 + prix2;
// })
// qte2.addEventListener("change", function () {
//     prix1 = qte1.value * pu1.value;
//     prix2 = qte2.value * pu2.value;
//     document.getElementById("prix1").value = prix1;
//     document.getElementById("prix2").value = prix2;
//     document.getElementById("total").value = prix1 + prix2;
// })
// pu2.addEventListener("change", function () {
//     prix1 = qte1.value * pu1.value;
//     prix2 = qte2.value * pu2.value;
//     document.getElementById("prix1").value = prix1;
//     document.getElementById("prix2").value = prix2;
//     document.getElementById("total").value = prix1 + prix2;
// })