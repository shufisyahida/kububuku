function loadCollection() {
	console.log("collection");
	var xmlhttp;
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		console.log("halo");
		console.log(xmlhttp.responseText);
	}
	var baseurl = base_url();
	xmlhttp.open("POST",baseurl + "index.php/Collection", true);
	xmlhttp.send();
}