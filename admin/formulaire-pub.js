function verifProduit(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
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
function verifliste() {

   choix_value = document.pub.liste.options[document.pub.liste.options.selectedIndex].value;
   

   if(choix_value == "-1")
   {
      alert("Veuillez faire un choix");
      document.pub.liste.focus();
      return false;
   }
  
}

function verifForm()
{ let test=true;
   let datee=pub.d1.value;
   let datee1=pub.d2.value;
   let produit=pub.p1.value;
   let description=pub.des.value;
  if(produit.length < 2 || produit.length > 25)
   {
         //alert("faux");
         test=false;
    //  surligne(champ, true);
      
   }
  let imgVal=pub.img.value; 
        if(imgVal=='') 
        { 
            test=false;

        } 
       
  choix_value = document.pub.liste.options[document.pub.liste.options.selectedIndex].value;
   

   if(choix_value == "-1")
   {
      document.pub.liste.focus();
      test=false;
   } 
   if(description.length < 2 || description.length > 500)
   {
         //alert("faux");
         test=false;
    //  surligne(champ, true);
      
   }
   if(datee=="")
   {
      test=false;
   }
    if(datee1=="")
   {
      test=false;
   }
 if(test)
{
     
      return true;
   }
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
  return test;
}
   function date()
   {

      let datee=pub.d1.value;
      let datee1=pub.d2.value;
       if(datee=="")
         alert("vide");
   }
