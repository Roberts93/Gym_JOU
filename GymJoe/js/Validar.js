
  function txLetras() {
    if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
    event.returnValue = false;
  }                      

function txNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57))
    event.returnValue = false;
  } 
                   

  function txNumerosDec(e,obj){
   tecla = (document.all) ? e.keyCode : e.which;  
      if (tecla==8) return true;
   		Punto = obj.value.split('.');
    		if (Punto.length>=2){
        				patron =/[0-9]/;
    					}else
  						patron =/[0-9.]/;
  						te = String.fromCharCode(tecla);
     					return patron.test(te); 
						}


function validarEmail(email){
    if (email.value.search(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/)==-1) {
      alert("ingresa el correo correctamente");
      return false;
    }
  }                

  function validarPostal(email){
    if (email.value.search(/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/)==-1) {
      alert("Ingresa correctamente el codigo postal");
      return false;
    }
  }   


  
function validarTel(email){
    if (email.value.search(/^[0-9]{2,3}-? ?[0-9]{6,7}$/)==-1) {
      alert("ingresa el telefono correctamente");
      return false;
    }
  }
