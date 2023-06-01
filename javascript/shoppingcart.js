const modal2 = document.getElementById("js--modal-error");
const binbutton = document.getElementById("bin")
const modal3 = document.getElementById("js--modal-error2");
const paybutton = document.getElementById("pay-button")

binbutton.onclick = function(){
    modal2.style.display = "flex";
    console.log("clicked");
    setTimeout(function(){
        modal2.style.display = "none";
    },1500);
}

paybutton.onclick = function(){
    modal3.style.display = "flex";
    console.log("clicked");
    setTimeout(function(){
        modal3.style.display = "none";
    },1500);
}