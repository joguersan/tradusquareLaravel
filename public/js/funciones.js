function acordeon(origen)
{
	document.getElementById("autor"+origen).classList.remove('deanimated');
	document.getElementById("fecha"+origen).classList.remove('deanimated');
	document.getElementById("autor"+origen).classList.add('animated');
	document.getElementById("fecha"+origen).classList.add('animated');
}
function acordeonOut(origen)
{
	document.getElementById("autor"+origen).classList.remove('animated');
	document.getElementById("fecha"+origen).classList.remove('animated');
	document.getElementById("autor"+origen).classList.add('deanimated');
	document.getElementById("fecha"+origen).classList.add('deanimated');
}