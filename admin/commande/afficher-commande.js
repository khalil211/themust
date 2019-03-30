let select=document.getElementById("nbelt");

select.addEventListener("change",function (e)
{
	window.location="tables-commande.php?n="+select.value;
	e.stopPropagation(); 
});

