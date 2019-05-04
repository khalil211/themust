	function myFunction(e)
{ 
var i=0;
var nom=document.getElementById('nom_cat').value;
var nom_m=document.getElementById("nom_manquant");
nom_m.textContent="";

if (!nom) {

//e.preventDefault();
//alert("false");

nom_m.textContent="Nom manquant";
nom_m.style.color='red';}
else
i++;

var description=document.getElementById('descr_cat').value;
var description_m=document.getElementById("description_manquante");
description_m.textContent="";

if (!description) {

//e.preventDefault();
//alert("false");

description_m.textContent="Description manquante";
description_m.style.color='red';}
else
i++;

if(i==2)
	alert("ajoutée avec succès");

	}