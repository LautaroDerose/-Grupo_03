var formulario = document.getElementById('formAddProduct');
//var formulario2 = document.forms['formRegistro'];
// seleccionar elementos del formulario
//.elements[] devuelve array con todos los imputs
// getElementById devuelve elemento con id

window.onload = iniciar;
function iniciar(){
  document.getElementById("agregarProducto").addEventListener('click',validar, false);
}

function validarNombre(){
  var elemento = document.getElementById("inputNombre");
  if(elemento.value === ""){
    alert("El campo no puede estar vacio");
    return false
  }
  return true;
}

function validarPrecio(){
  var elemento = document.getElementById("inputPrecio");
  if (isNaN(elemento.value)) {
    alert("El precio debe estar expresado en numeros");
    return false;
  }
  return true;
}
// El label de stock tiene (for="inputPrecio") deberiamos cambiarlo a inputStock?
function validarStock(){
  var elemento = document.getElementById("inputStock");
  if (isNaN(elemento.value)) {
    alert("El stock debe estar expresado en numeros");
    return false;
  }
  return true;
}

function validarDescripcion(){
  var elemento = document.getElementById("inputDescripcion");
  if(elemento.value === ""){
    alert("El campo no puede estar vacio");
    return false
  }
  return true;
}

function validar(e){
  if (validarNombre() && validarPrecio() && validarStock() && validarDescripcion() && confirm("Pulsa aceptar si desea enviar el formulario")) {
return true;
}else {
  e.preventDefault();
  return false;
}
}
