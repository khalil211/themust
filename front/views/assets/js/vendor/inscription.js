let id=document.getElementById("identifiant");
let email=document.getElementById("email");
let mdp=document.getElementById("motdepasse");




function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#f23d0f";
   else
      champ.style.backgroundColor = "";
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifPassword(champ)
{
   if(champ.value.length < 6 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifPseudo()
{
   if (id.value.length < 2 || id.value.length > 25)
   {
      return false;
   }
   else
   {
      return true;
   }
}

function verifForm(f)
{
   var identifiantOk = verifPseudo(f.identifiant);
   //var mailOk = verifMail(f.email);
   var passwordOk = verifPassword(f.password);
   
   if(pseudoOk && passwordOk)
   {
   	return true;
	   alert("mriguel");
   }   
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}