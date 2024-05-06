function validar() {
    
   
 const nombre= document.getElementById("myname"); const apellidos=document.getElementById("surname");
const correo=document.getElementById("email");
     
 const clave=document.getElementById("password");
const telefono=document.getElementById("mobile"); const terminosYcondiciones=document.getElementById("form");
const listInputs = document.querySelectorAll(".form-input")
    
 form.addEventListener("submit" ,(e) =>{
     e.preventDefault();
     listInputs.forEach(element =>{
        elemnt.lastElementChild.innerHTML="";
     })
     
     if(nombre.value.length< 1 || nombre.value.trim()==""){
         mostrarMensajeError("myname","Nombre no valido");
                               
 }
      if(apellidos.value.length< 1 || apellidos.value.trim()==""){
   mostrarMensajeError("surname", "Apellido no valido");                                
 }  
if(correo.value.length< 1 || correo.value.trim()==""){
   mostrarMensajeError("email", "correo no valido");                                
 } 
 if(contraseña.value.length< 1 ||  contraseña.value.trim()==""){
   mostrarMensajeError("password", "contraseña no valido");                                
 } 
 if(telefono.value.length< 1 || telefono.value.trim()==""){
   mostrarMensajeError("mobile", "Numero de telefono  no valido");                                
 } 
    
 } );
 function mostrarMensajeError(claseInput, mensaje){
let elemento = document.querySelector('.$[claseInput]');
   Elemento.lastElementChild.innerHTML =mensaje; 
    }
    
   