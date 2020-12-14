var dateBtn = document.getElementById("dateBtn");
var dateInput = document.getElementById("dateInput")
dateBtn.addEventListener("click", function()
{
    var datetemp = new Date();
    var date = datetemp.getFullYear() +"/"+ (datetemp.getMonth()+1) +"/"+ (datetemp.getDate())
    dateInput.value=date;
})
var HeureBtn = document.getElementById("heureBtn");
var heureInput= document.getElementById("heureInput");
heureBtn.addEventListener("click", function()
{
    var datetemp = new Date();
    var heure = datetemp.getHours() + ":" + datetemp.getMinutes() + ":" + datetemp.getSeconds()
    heureInput.value=heure;
})
    
