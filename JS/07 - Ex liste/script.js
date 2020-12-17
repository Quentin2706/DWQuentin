var ajout = document.getElementById("ajout")
ajout.addEventListener("click", function(){
    var result = prompt("Entre un dessert.");
    var test= document.createElement("li");
    test.innerHTML = result;
    liste.appendChild(test);
})


var liste = document.getElementById("listeDessert");

liste.addEventListener("mouseover", function(){
    var li = document.getElementsByTagName("li");
    for(let i = 0; i < li.length; i++)
    {
        li[i].addEventListener("click", function(){
            liste.removeChild(li[i]);
        })
    }

})
