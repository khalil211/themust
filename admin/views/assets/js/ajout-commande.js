let ajouterp=document.getElementById('ajouterp');
let shown=0;

ajouterp.addEventListener("click",function (e)
{
	if (shown<10)
	{
		let nouv=document.getElementById("prod"+shown);
		nouv.style.display="flex";
		shown++;
	}
	e.stopPropagation();
});