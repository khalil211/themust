console.log("test");
document.getElementById("blogg").addEventListener("submit",function (e){
	let teste=true;
	console.log("test")
	let idb, type,description,date;
	idb=blogg.idblog.value;
	type=blogg.idblog.value;
	description=blogg.description.value;
	date=blogg.date.value;
	if(document.forms["blogg"]["type"].value=="" && document.forms["blogg"]["description"].value=="" && document.forms["blogg"]["date"].value=="" && document.forms["blogg"]["idblog"].value=="" )
{
	console.log("Veuillez remplir tout les champs! ");
}
	if (idb.length < 1 || idb.length >4 )
	{
		teste=false;
		console.log("ID ne doit pas deppaser 4 carachter");
	}
	if (description.length < 10 || description.length > 200 ) 
	{
		teste=false;
		console.log("Veuillez ecrire plus que 10 carachter dans le champ description.");
	}
	 if (teste===false)
	 {
   	console.log("Verifiez vos informations.");

   	 }
   	 else
   	 {
   	 	console.log("Ajout avec succès.")
   	 }
   	
		e.preventDefault();
});