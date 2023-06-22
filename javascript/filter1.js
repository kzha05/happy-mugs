let allMugs = document.getElementsByClassName("card");

let filters = document.getElementsByClassName("filter");
//food inspired
let foodfilter = document.getElementById("checkbox-foodinspired")
foodfilter.onchange = function(){
    if(foodfilter.checked === true){
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "food inspired"){
                allMugs[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "food inspired"){
                allMugs[i].style.display = "none";
            }
        }
    }
}

let animalfilter = document.getElementById("checkbox-animal")
animalfilter.onchange = function(){
    if(animalfilter.checked === true){
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "animal"){
                allMugs[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "animal"){
                allMugs[i].style.display = "none";
            }
        }
    }
}

let basicfilter = document.getElementById("checkbox-basic")
basicfilter.onchange = function(){
    if(basicfilter.checked === true){
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "basic"){
                allMugs[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "basic"){
                allMugs[i].style.display = "none";
            }
        }
    }
}

let otherfilter = document.getElementById("checkbox-other")
otherfilter.onchange = function(){
    if(otherfilter.checked === true){
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "other"){
                allMugs[i].style.display = "block";
            }
        }
    }
    else{
        for(let i = 0; i < allMugs.length; i++){
            if(allMugs[i].dataset.category === "other"){
                allMugs[i].style.display = "none";
            }
        }
    }
}