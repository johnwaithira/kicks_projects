$(document).ready(function(){

});

window.onscroll = ()=>{
    var sb, sbd, dbs,i, cY, a,b,c,d,e;
    sb = document.querySelector("#scroll-btn");
    sbd = sb.style;sbd.display = "none";
    dbs = document.body.scrollTop;sb.onclick = () =>{
    dbs = 0;document.documentElement.scrollTop = 0;}
    if(dbs > 40 || document.documentElement.scrollTop > 40)
    {sbd.display = "block";}else{sbd.display = "none";}
    var sticker = document.querySelector(".stick");
    var product = document.querySelector(".stickproduct");
    var after = document.querySelector(".after");

    if(
        document.body.scrollTop > 200 
        || 
        document.documentElement.scrollTop > 200 
        && 
        (
            document.documentElement.scrollTop 
            ) < product.clientHeight - 400)
    {
        sticker.classList.add("custom_one");
        product.classList.add("custom_two");
        after.style.display = "none";
    }else{
        sticker.classList.remove("custom_one");
        product.classList.remove("custom_two");
        after.style.display = "block";
    }

}

var map_display = document.querySelector(
    ".map_display"
    );

map_display.style.height = (
    window.innerHeight - 150
    ) +"px";

let close_map = document.querySelector("#close");
let viewOnMapBTN= document.querySelector("#viewOnMapBTN");
let map = document.querySelector("#viewOnMap");
map.style.display = "none";


viewOnMapBTN.addEventListener("click", function(){
    map.style.display = "block";
});
close_map.addEventListener("click", function(){
    map.style.display = "none";
});