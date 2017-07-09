 function verifform()
  {
   if(document.fiche.nom.value == "")
    {
     alert("Veuillez entrer votre nom!");
     document.fiche.nom.focus();
     return false;
    }
	if(document.fiche.prenom.value == "")
    {
     alert("Veuillez entrer votre prenom!");
     document.fiche.prenom.focus();
     return false;
    }
/*	
	if(document.fiche.intitulee.value == "")
    {
     alert("Veuillez renseigné votre titre !");
     document.fiche.intitulee.focus();
     return false;
    }
	*/
	if(document.fiche.email.value == "")
    {
     alert("Veuillez entrer votre email!");
     document.fiche.email.focus();
     return false;
    }
    
   if(document.fiche.email.value.indexOf('@') == -1 )
    {
	
     alert("Ce n'est pas une adresse électronique valable!");
     document.fiche.email.focus();
     return false;
    }
   if(document.fiche.email.value.indexOf('.') == -1 )
    {
	
     alert("Ce n'est pas une adresse électronique valable!");
     document.fiche.email.focus();
     return false;
    }
	//dans la candidature spontanée...
	/*
	var exp=new RegExp("[0-9][0-9]/[0-9][0-9]/[0-9][0-9]/[0-9][0-9]");
	if(exp.test(document.fiche.tel.value)){
	 alert("C'est OK comme num de tel...");
     document.fiche.tel.focus();
	 else{
	  alert(" tel pas bon!...");
     return false;
	 }
	}
	*/
  }