function processador()
{
	var select = document.getElementById('inputPro');
	var value = select.options[select.selectedIndex].id;
	document.getElementById('inputPM').value = value; 
}
