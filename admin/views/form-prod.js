	function myFunction(e)
{ 
var i=0;
var nom=document.getElementById('nom').value;
var nom_m=document.getElementById("nom_manquant");
nom_m.textContent="";

if (!nom) {

//e.preventDefault();
//alert("false");

nom_m.textContent="Nom manquant";
nom_m.style.color='red';}
else
i++;
var quantite=document.getElementById('quantite').value;
var quantite_m=document.getElementById("quantite_manquante");
quantite_m.textContent="";

if (!quantite) {

//e.preventDefault();
//alert("false");

quantite_m.textContent="Quantite manquante";
quantite_m.style.color='red';}
else 
	if (isFinite(quantite))
i++;
else
	{quantite_m.textContent="not a number";
quantite_m.style.color='red';}


var prix=document.getElementById('prix').value;
var prix_m=document.getElementById("prix_manquant");
prix_m.textContent="";
if (!prix) {

//e.preventDefault();
//alert("false");

prix_m.textContent="Prix manquant";
prix_m.style.color='red';}
else
	if (isFinite(prix))
i++;
else
	{prix_m.textContent="not a number";
prix_m.style.color='red';}

var categorie=document.getElementById('categorie').value;
var categorie_m=document.getElementById("categorie_manquante");
categorie_m.textContent="";
if (categorie=="categorie") {

//e.preventDefault();
//alert("false");

categorie_m.textContent="Categorie manquante";
categorie_m.style.color='red';}
else
i++;


if(i==4)
	alert("yaas");

//else
//	e.preventDefault();

}