var red = document.getElementById("Red1");
var yellow = document.getElementById("Yellow1");
var green = document.getElementById("Green1");
var redId, yellowId, greenId,frameId,color;
function frame(){
    greenId = setTimeout(greenBck,2000);
    yellowId = setTimeout(yellowBck,7000);
    redId = setTimeout(redBck,10000);

}
function frameChanged(){
    greenId = setTimeout(greenBck,color.intervalo);
    yellowId = setTimeout(yellowBck,color.intervalo +1000);
    redId = setTimeout(redBck,color.intervalo + 2000);
}
function loadData(){
    var datos = localStorage.getItem('intervalo');
    if(datos != null){
        color = JSON.parse(datos);
        frameChanged()
    }
    else{
        frame();
    }
}
function redBck(){
clearLights();
red.style.backgroundColor = "red";
if(color != null){
    frameId = setTimeout(frameChanged,color.intervalo + 1000);
}
else{
    frameId = setTimeout(frame,3000);
}
}

function yellowBck(){
clearLights();
yellow.style.backgroundColor = "yellow";
}
function greenBck(){
clearLights();
green.style.backgroundColor = "green";


}

function clearLights(){
    red.style.backgroundColor = "#111";
    yellow.style.backgroundColor = "#111";
    green.style.backgroundColor = "#111";

}
window.addEventListener("load",loadData);
