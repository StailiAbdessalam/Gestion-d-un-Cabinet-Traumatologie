
let but2 = document.getElementById("icon-S");
let but3 = document.getElementById("Button-menu1");


document.getElementById("menu").onclick =function(){
    document.getElementById("responsive").style.marginTop = "auto";

}
but2.onclick = function(){
    
    document.getElementById("responsive").style.marginTop = "-120px";
}
but3.onclick = function(){
    window.open("page-doctor.html","_self");
}
