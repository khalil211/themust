function myFunction()
{ 
let idb, type,description,date;
	let teste=true;
	idb=blogg.idb.value;
	type=blogg.idb.value;
	description=blogg.description.value;
	date=blogg.date.value;
	if(document.forms["blogg"]["type"].value=="" && document.forms["blogg"]["description"].value=="" && document.forms["blogg"]["date"].value=="" && document.forms["blogg"]["idb"].value=="" )
{
	alert("Veuillez remplir tout les champs! ");
}
	if (idb.length < 1 || idb.length >4 )
	{
		teste=false;
		alert("ID ne doit pas deppaser 4 carachter");
	}
	if (description.length < 10 || description.length > 200 ) 
	{
		teste=false;
		alert("Veuillez ecrire plus que 10 carachter dans le champ description.");
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