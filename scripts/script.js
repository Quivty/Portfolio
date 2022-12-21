//increasing the number of days

function updateDays(){
    let starastrona = new Date(2020,11,4,19,15,00); 
    let date = new Date();
    let between = date.getTime() - starastrona.getTime();
    let days = Math.floor(between/(1000*60*60*24));
    if (days>0) {
        document.querySelector("#days").innerHTML=days+" days";
    }else {
        document.querySelector("#days").innerHTML="700+ days";
    }

}
updateDays()

//increasing the number of hours

let hours=55;
function updateHours(){
    let start = new Date(2022,10,10,18); 
    let now = new Date();
    let between = now.getTime() - start.getTime();
    let add = Math.floor(between/(1000*60*60*24))/2;
    hours=hours+add;
    hourcontainer=document.querySelector(".hours");
    hourcontainer.innerHTML=hours+" hours";
    setTimeout(updateHours,1000*60*60*24);
}
updateHours();

//increasing the number of lines

let lines=2234;
function updateLines(){
    let start = new Date(2022,10,10,18); 
    let now = new Date();
    let between = now.getTime() - start.getTime();
    let add = Math.floor(between/(1000*60*60*3))
    lines=lines+add;
    linecontainer=document.querySelector(".lines");
    linecontainer.innerHTML=lines+" lines<br>of code";
    setTimeout(updateLines,1000*60*60*3);
}
updateLines();

//Showing navbar on scroll

myID = document.querySelector("nav");
var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 1) {
        myID.className = "show"
    } else {
        myID.className = "hide"
    }
};
window.addEventListener("scroll", myScrollFunc);

