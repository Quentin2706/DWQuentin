var image = document.getElementById("ampoule");

image.addEventListener("click", function(){
    console.log(image.src);

    image.src = image.getAttribute("src") == "AmpouleHS.GIF" ? "AmpouleOK.GIF" : "AmpouleHS.GIF"; 

})
