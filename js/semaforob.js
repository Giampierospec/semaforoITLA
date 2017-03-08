
var red = document.getElementById("Red");
var yellow = document.getElementById("Yellow");
var green = document.getElementById("Green");

function ciclo(){
  var color = "Red";
  $.ajax({
    url: 'server.php',
    method: 'get',
    success: function(info){
      color = info;
    }
  });

  if(color == 'Red'){
    color = 'Green';
  }
  else if(color == 'Green'){
    color = 'Red';
  }
  else if(color == 'Yellow'){
    color = 'Yellow';
  }
  clearLights();
  $("#"+color).css("background-color",color.toLowerCase());
  setTimeout(ciclo, 500);
}
function clearLights(){
    red.style.backgroundColor = "#111";
    yellow.style.backgroundColor = "#111";
    green.style.backgroundColor = "#111";

}
window.addEventListener("load", ciclo);
