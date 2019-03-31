function myFunction()
{ 
let nom, prix, quantite;
	let teste=true;
	nom=produitf.nom.value;
	prix=produitf.prix.value;
	quantite=produitf.quantite.value;

	if (nom.length < 5 || nom.length > 30)
	{
		teste=false;
	
	}
	if (prix < 200 || prix > 900 ) 
	{
		teste=false;
	
	}

	if (quantite < 5 || quantite > 15)
	{
		teste=false;
		
	}
	 if (teste===false)
	 {
   	alert("Verifiez vos informations.");

   	 }
   	 else
   	 {
   	 	alert("Ajout avec succès.")
   	 }
   	

}