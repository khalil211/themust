let ajouterp=document.getElementById("ajouterp");
let nbp=0;
let idc=document.getElementById("idc"), produits=new Array();
let alerte="<div class=\"sufee-alert alert with-close alert-danger alert-dismissible fade show\" id=\"alerte\"><span class=\"badge badge-pill badge-danger\">Erreur</span>   Veuillez vérifier les informations fournies.<button type=\"button\" class=\"close\" data-dismiss=\"alert\"aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>";

commandef.addEventListener("submit",function (e)
{
	let checkP=true;
	for (let i=0;i<produits.length;i++)
	{
		if (produits[i].childNodes[0].value<1 || produits[i].childNodes[1].value<1)
			checkP=false;
	}
	if (idc.value<1 || !checkP)
	{
		document.getElementById("commandef").insertAdjacentHTML("beforebegin",alerte);
		e.preventDefault();
	}
});

idc.addEventListener("input",function (e)
{
	if (idc.value<1)
		idc.setAttribute("class","form-control is-invalid");
	else
		idc.setAttribute("class","form-control");
	e.stopPropagation();
});

ajouterp.addEventListener("click",function (e)
{
	let nouv=document.createElement("div");
	nouv.style.display="flex";
	nouv.style.marginBottom="10px";
	let idp=document.createElement("input");
	idp.setAttribute("class","form-control");
	idp.setAttribute("type","number");
	idp.setAttribute("placeholder","ID Produit");
	idp.setAttribute("name","idp"+nbp);
	idp.setAttribute("required","true");
	idp.style.marginRight="10px";
	idp.style.width="125px";
	idp.addEventListener("input",function (e3)
	{
		if (idp.value<1)
			idp.setAttribute("class","form-control is-invalid");
		else
			idp.setAttribute("class","form-control");
		e3.stopPropagation();
	});
	let qte=document.createElement("input");
	qte.setAttribute("class","form-control");
	qte.setAttribute("type","number");
	qte.setAttribute("placeholder","Quantite");
	qte.setAttribute("name","qte"+nbp);
	qte.setAttribute("required","true");
	qte.style.marginRight="10px";
	qte.style.width="115px";
	qte.addEventListener("click",function (e4)
	{
		if (qte.value<1)
			qte.setAttribute("class","form-control is-invalid");
		else
			qte.setAttribute("class","form-control");
		e4.stopPropagation();
	});
	let supprimerp=document.createElement("button");
	supprimerp.setAttribute("type","button");
	supprimerp.setAttribute("class","btn btn-danger btn-sm");
	supprimerp.setAttribute("id",nbp+"supprimer");
	supprimerp.innerHTML="<i class=\"fa fa-trash-o\"></i>";
	supprimerp.style.width="40px";
	nouv.appendChild(idp);
	nouv.appendChild(qte);
	nouv.appendChild(supprimerp);
	document.getElementById("listep").insertBefore(nouv,ajouterp);
	produits.push(nouv);
	supprimerp.addEventListener("click",function (e2)
	{
		document.getElementById("listep").removeChild(nouv);
		produits.splice(parseInt(supprimerp.id),1);
		nbp--;
		for (let i=0;i<produits.length;i++)
		{
			produits[i].childNodes[0].setAttribute("name","idp"+i);
			produits[i].childNodes[1].setAttribute("name","qte"+i);
			produits[i].childNodes[2].setAttribute("id",i);
		}
		e2.stopPropagation();
	});
	nbp++;
	e.stopPropagation();
});