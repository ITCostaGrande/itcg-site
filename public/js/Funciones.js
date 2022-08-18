function mostrar()
{

  if(document.getElementById("formulario").style.height>"0%"){
    document.getElementById("formulario").style.height="0%";
    document.getElementById("formulario").style.right="0%";
    document.getElementById("formulario").style.bottom="0%";
    document.getElementById("formulario").style.width="0%";
    document.getElementById("formulario").style.border="0px";
    document.getElementById("Bcontacto").style.height="10%";
    document.getElementById("Bcontacto").style.border="3px inset #1B396A";
    document.getElementById("Bcontacto").style.transition= "all 0.5s";
    document.getElementById("formulario").style.transition = "all 0.5s";
  }else{
    if (window.matchMedia("(max-height: 400px)").matches) {
        document.getElementById("formulario").style.height="32%";
    }else{
        if (window.matchMedia("(max-height: 700px)").matches) {
        document.getElementById("formulario").style.height="40%";
    }else{
        if (window.matchMedia("(min-height: 1200px)").matches) {
                document.getElementById("formulario").style.height="550px";
            
        }else{
                document.getElementById("formulario").style.height="50%";
            }
        
    }
    }
    if (window.matchMedia("(min-width: 600px)").matches) {
        document.getElementById("formulario").style.width="60%";
    }
    if (window.matchMedia("(max-width: 600px)").matches) {
        document.getElementById("formulario").style.width="63%";
    }
    if (window.matchMedia("(min-width: 768px)").matches) {
        document.getElementById("formulario").style.width="35%";
    }
     if (window.matchMedia("(min-width: 992px)").matches) {
        document.getElementById("formulario").style.width="30%";
    }
    if (window.matchMedia("(min-width: 1200px)").matches) {
        document.getElementById("formulario").style.width="25%";
    }
    if (window.matchMedia("(min-width: 1400px)").matches) {
        document.getElementById("formulario").style.width="550px";
    }
      document.getElementById("formulario").style.backgroundColor=" #1B396A";
    document.getElementById("formulario").style.border="3px inset #1B396A";
    document.getElementById("Bcontacto").style.height="0%";
    document.getElementById("Bcontacto").style.border="0";
    document.getElementById("Bcontacto").style.transition= "all 0.3s";
    document.getElementById("formulario").style.transition = "all 0.5s";

  }

		
}

