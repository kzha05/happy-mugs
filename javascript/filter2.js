var amount = 30
document.getElementById("slider").onchange = function() {

    amount = document.getElementById("rangeValue").innerText;
    console.log(amount);
    let cards = document.getElementsByClassName("card");

    for (let i = 0; i < cards.length; i++) {
        let c_card = cards[i];
        let c_price = Math.round (c_card.getAttribute("data-price"));
        console.log(c_price);
        if (c_price < amount) {
            c_card.style.display = "flex";
        }
        else{
            c_card.style.display = "none";
        }
    }
}