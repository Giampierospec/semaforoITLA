var red = document.getElementById("Red");
var yellow = document.getElementById("Yellow");
var green = document.getElementById("Green");
var message = document.getElementById("message");
var color = "Red";
var tiempo = 0;
function frame(){
  if(tiempoRed != 0 && tiempoGreen != 0 && tiempoYellow != 0){
    console.log("tiempoRojo "+tiempoRed+" tiempoVerde "+tiempoGreen);
    setTimeout(redbck,1000);
    setTimeout(greenbck,tiempoRed+1000);
    setTimeout(yellowbck,tiempoGreen+2000);
  }
  else{
    setTimeout(redbck,1000);
    setTimeout(greenbck,9000);
    setTimeout(yellowbck,14000);
  }



}
function redbck(){
  clearLights();
  color = "Red";
  $("#"+color).css("background-color",color.toLowerCase());
  actualizarServidor(color);
}
function greenbck(){
  clearLights();
  color = "Green";
  $("#"+color).css("background-color",color.toLowerCase());
  actualizarServidor(color);
}
function yellowbck(){

  if(tiempoYellow!= 0){
    clearLights();
    color = "Yellow";
    $("#"+color).css("background-color",color.toLowerCase());
    actualizarServidor(color);
    setTimeout(frame,tiempoYellow+3000);
  }
  else{
    clearLights();
    color = "Yellow";
    $("#"+color).css("background-color",color.toLowerCase());
    actualizarServidor(color);
    setTimeout(frame,3000);
  }


}






function actualizarServidor(cc){
  $.ajax({
    url:'server.php',
    method:'post',
    data:{'color':color},
    success:function(info){
      console.log(info);
    }
  });
  //setInterval(frame, 1000);
}
function clearLights(){
    red.style.backgroundColor = "#111";
    yellow.style.backgroundColor = "#111";
    green.style.backgroundColor = "#111";

}
window.addEventListener("load",frame);
