var red = document.getElementById("Red2");
var yellow = document.getElementById("Yellow2");
var green = document.getElementById("Green2");
var redId, yellowId, greenId,frameId,color;

function frame(){
    redId = setTimeout(redBck,2000);
    greenId = setTimeout(greenBck,7000);
    yellowId = setTimeout(yellowBck,12000);



}
function frameChanged(){
    redId = setTimeout(redBck,color.intervalo);
    greenId = setTimeout(greenBck,color.intervalo + 1000);
    yellowId = setTimeout(yellowBck,color.intervalo + 2000);
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
}

function yellowBck(){
clearLights();
yellow.style.backgroundColor = "yellow";
if(color != null){
        frameId = setTimeout(frameChanged,color.intervalo + 1000);
}
else{
frameId = setTimeout(frame,1000);
}
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
