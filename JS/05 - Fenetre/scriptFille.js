fermezmoi = document.getElementById("filleclose");
fermezparent = document.getElementById("parentclose");

fermezmoi.addEventListener("click", function(){
    self.close();
})

fermezparent.addEventListener("click", function(){
    var parent = window.opener;
    parent.close();
})