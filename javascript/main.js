const modal = document.getElementById("js--modal");
const cartbutton = document.getElementById("cart-button")

cartbutton.onclick = function(){
    modal.style.display = "flex";
    console.log("clicked");
    setTimeout(function(){
        modal.style.display = "none";
    },2000);
}