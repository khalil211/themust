function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#f23d0f";
   else
      champ.style.backgroundColor = "";
}
function verifNom(champ)
{
   if(champ.value.length < 5 || champ.value.length > 30)
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
function verifDescription(champ)
{
   if(champ.value.length < 10 || champ.value.length > 200)
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
function verifPourcentage(champ)
{
   if(champ.value < 0 || champ.value > 100)
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