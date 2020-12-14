userAgent = navigator.userAgent;
// userAgent.split = " "; 
// version = navigator.appCodeName;
// appversion = navigator.appVersion;
// document.getElementById("texte1").innerHTML = version +"<br>"+ appversion;
// console.log(navigator);
// console.log(navigator.platform);
console.log(userAgent);

// navigator.sayswho= (function(){
//     var ua= navigator.userAgent, tem,
//     M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
//     if(/trident/i.test(M[1])){
//         tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
//         return 'IE '+(tem[1] || '');
//     }
//     if(M[1]=== 'Chrome'){
//         tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
//         if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
//     }
//     M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
//     if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
//     return M.join(' ');
// })();
// console.log(navigator.sayswho);

function QuelNavigateur() {
    var ua = navigator.userAgent;
    var x = ua.indexOf("MSIE");
    var navig = "MSIE";
    if (x == -1) {
        x = ua.indexOf("Firefox");
        navig = "Firefox";
        if (x == -1) {
            x = ua.indexOf("OPR");
            navig = "Opera";
            if (x == -1) {
                x = ua.indexOf("Edg");
                navig = "Microsoft Edge";
                if (x == -1) {
                    x = ua.indexOf("Chrome");
                    navig = "Chrome";
                    if (x == -1) {
                        x = ua.indexOf("Safari");
                        navig = "Safari"
                    }
                }
            }
        }
    }
    return navig;
}
navig = QuelNavigateur();
console.log(navig);
