function verifformS()
  {
   if(document.ficheS.intitule.value == "")
    {
     alert("Veuillez renseigné votre titre !");
     document.ficheS.intitule.focus();
     return false;
    }
   if(document.ficheS.nom.value == "")
    {
     alert("Veuillez entrer votre nom!");
     document.ficheS.nom.focus();
     return false;
    }
	if(document.ficheS.prenom.value == "")
    {
     alert("Veuillez entrer votre prenom!");
     document.ficheS.prenom.focus();
     return false;
    }
	
	
	if(document.ficheS.email.value == "")
    {
     alert("Veuillez entrer votre email!");
     document.ficheS.email.focus();
     return false;
    }
    
   if(document.ficheS.email.value.indexOf('@') == -1 )
    {
	
     alert("Ce n'est pas une adresse électronique valable!");
     document.ficheS.email.focus();
     return false;
    }
   if(document.ficheS.email.value.indexOf('.') == -1 )
    {
	
     alert("Ce n'est pas une adresse électronique valable!");
     document.ficheS.email.focus();
     return false;
    }
	/*
	//dans la candidature spontanée...
	var exp=new RegExp("[0-9][0-9]/[0-9][0-9]/[0-9][0-9]/[0-9][0-9]");
	if(document.ficheS.tel.value == "" || !exp.test(document.ficheS.tel.value))
    {
     alert("Veuillez entrer votre num de telephone");
     document.ficheS.tel.focus();
     return false;
    }
	
	
	/*
	if(exp.test(document.ficheS.tel.value)){
	 alert("C'est OK comme num de tel...");
     document.ficheS.tel.focus();
	 else{
	  alert(" tel pas bon!...");
     return false;
	 }
	}
*/
  }