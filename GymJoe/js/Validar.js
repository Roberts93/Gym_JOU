
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


                    