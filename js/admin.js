var numIntervalo = document.getElementById('numIntervalo');
var btnSave = document.getElementById('btnSave');

function intervalo(intervalo){
  this.intervalo = intervalo;
}
function save(){
  var numInter = numIntervalo.value;
  if(numInter!= null){
    numInter *= 1000;
    var int = new intervalo(numInter);
    var datos = JSON.stringify(int);
    localStorage.setItem('intervalo',datos);
  }
  else{
    alert("Campo Vacio llenelo");
  }

}

btnSave.addEventListener("click",save);
